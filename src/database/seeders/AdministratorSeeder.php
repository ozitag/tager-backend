<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use OZiTAG\Tager\Backend\Admin\Models\Administrator;

/**
 * Заводит первого администратора.
 *
 * Раньше учётку сеял сам пакет tager-backend-admin — с адресом и паролем,
 * лежавшими в его исходниках. Пакет это убрал, и теперь первого
 * администратора заводит проект: реквизиты берутся из окружения и нигде
 * не оказываются в репозитории.
 *
 *   php artisan db:seed --class=Database\\Seeders\\AdministratorSeeder
 *
 * Сидер идемпотентен: повторный запуск ничего не трогает, пароль у уже
 * заведённой учётки не перезаписывается.
 */
class AdministratorSeeder extends Seeder
{
    private const SUPER_ADMINISTRATOR_ROLE = 'Super Administrator';

    public function run(): void
    {
        $name = (string) env('TAGER_ADMIN_NAME', 'Administrator');
        $email = (string) env('TAGER_ADMIN_EMAIL', '');
        $password = (string) env('TAGER_ADMIN_PASSWORD', '');

        if ($email === '' || $password === '') {
            $this->command?->warn(
                'AdministratorSeeder: не заданы TAGER_ADMIN_EMAIL и TAGER_ADMIN_PASSWORD — пропускаю.'
            );

            return;
        }

        $administrator = Administrator::query()->where('email', $email)->first();

        if ($administrator) {
            $this->command?->info('AdministratorSeeder: ' . $email . ' уже существует — пропускаю.');
        } else {
            $administrator = Administrator::query()->create([
                'name' => $name,
                'email' => $email,
                'password' => Hash::make($password),
            ]);

            $this->command?->info('AdministratorSeeder: создан ' . $email . '.');
        }

        $this->grantSuperAdministrator($administrator);
    }

    private function grantSuperAdministrator(Administrator $administrator): void
    {
        $roleId = DB::table('tager_roles')
            ->where('name', self::SUPER_ADMINISTRATOR_ROLE)
            ->value('id');

        if (!$roleId) {
            $this->command?->warn(
                'AdministratorSeeder: роль "' . self::SUPER_ADMINISTRATOR_ROLE . '" не найдена — права не выданы.'
            );

            return;
        }

        $exists = DB::table('tager_administrators_roles')
            ->where('administrator_id', $administrator->id)
            ->where('role_id', $roleId)
            ->exists();

        if ($exists) {
            return;
        }

        DB::table('tager_administrators_roles')->insert([
            'administrator_id' => $administrator->id,
            'role_id' => $roleId,
        ]);

        $this->command?->info('AdministratorSeeder: выдана роль ' . self::SUPER_ADMINISTRATOR_ROLE . '.');
    }
}
