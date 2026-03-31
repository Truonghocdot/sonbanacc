<?php

namespace Database\Seeders;

use App\Constants\SettingName;
use App\Constants\UserRole;
use App\Models\Setting;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->createAdminUser();
        $this->initSetting();
        $this->seedSampleData();
    }

    private function createAdminUser(): void
    {
        // Tạo Admin chính (ID 1)
        User::create([
            'name' => 'Admin System',
            'email' => 'admin@sonbanacc.com',
            'password' => Hash::make('password'),
            'role' => UserRole::ADMIN,
            'status' => 1,
        ]);

        // Tạo tài khoản "Chủ shop uy tín" (ID 3) để hiển thị trên Leaderboard trang chủ
        // Lưu ý: Nếu database mới hoàn toàn, record này sẽ có ID là 2 hoặc 3 tùy vào việc có xóa record cũ hay không.
        // Ở đây ta tạo thêm 2 user để đảm bảo có ID 3 nếu cần thiết cho giao diện hiện tại.
        User::create([
            'name' => 'Staff Support',
            'email' => 'staff@sonbanacc.com',
            'password' => Hash::make('password'),
            'role' => UserRole::CLIENT,
            'status' => 1,
        ]);

        User::create([
            'name' => 'NGUYEN MINH SON', // Tên khớp với Facebook Link và giao diện trang chủ
            'email' => 'minhson@sonbanacc.com',
            'password' => Hash::make('password'),
            'role' => UserRole::ADMIN,
            'status' => 1,
        ]);
    }

    private function initSetting()
    {
        // Thông tin ngân hàng: Đồng bộ hóa BIN và Tên ngân hàng (Thường dùng MB Bank cho STK số điện thoại)
        Setting::create([
            'setting_name' => SettingName::BIN_BANK->value,
            'setting_value' => '970422', // MB Bank BIN (Khớp với STK số điện thoại)
        ]);

        Setting::create([
            'setting_name' => SettingName::ACCOUNT_NUMBER->value,
            'setting_value' => '0986526036',
        ]);

        Setting::create([
            'setting_name' => SettingName::ACCOUNT_NAME->value,
            'setting_value' => 'NGUYEN MINH SON',
        ]);

        Setting::create([
            'setting_name' => SettingName::PHONE_NUMBER->value,
            'setting_value' => '0986526036',
        ]);

        Setting::create([
            'setting_name' => SettingName::ZALO_LINK->value,
            'setting_value' => 'https://zalo.me/0986526036',
        ]);

        Setting::create([
            'setting_name' => SettingName::FACEBOOK_LINK->value,
            'setting_value' => 'https://www.facebook.com/le.vietanh.939173',
        ]);

        Setting::create([
            'setting_name' => SettingName::BANKING->value,
            'setting_value' => 'MB Bank',
        ]);

        // Nội dung thông báo Popup khi vào trang
        Setting::create([
            'setting_name' => SettingName::POPUP_CONTENT->value,
            'setting_value' => '<h2 style="text-align: center; color: #FFD700;">CHÀO MỪNG BẠN ĐẾN VỚI SONBANACC!</h2><p>Hệ thống bán Acc Liên Quân & Free Fire tự động 24/7. Uy tín - Giá rẻ - Bảo hành trọn đời.</p><ul><li>Nạp tiền tự động qua ngân hàng</li><li>Nhận Acc ngay sau khi thanh toán</li><li>Hỗ trợ khách hàng 24/7 qua Zalo/Facebook</li></ul><p style="text-align: center;"><b>Chúc các bạn có trải nghiệm mua sắm tuyệt vời!</b></p>',
        ]);
    }

    private function seedSampleData()
    {
        // Tạo một số danh mục mẫu để trang chủ không bị trống
        $categories = [
            ['title' => 'Acc Liên Quân Siêu Cấp', 'description' => 'Tài khoản Liên Quân Rank Cao, nhiều trang phục giới hạn.'],
            ['title' => 'Acc Free Fire Giá Rẻ', 'description' => 'Tài khoản Free Fire đầy đủ súng, skin hot nhất hiện nay.'],
            ['title' => 'Acc Random 20k', 'description' => 'Thử vận may nhận ngay Acc cực phẩm chỉ với 20k.'],
        ];

        foreach ($categories as $cat) {
            Category::create([
                'title' => $cat['title'],
                'slug' => Str::slug($cat['title']),
                'description' => $cat['description'],
                'meta_title' => $cat['title'],
                'meta_description' => $cat['description'],
            ]);
        }
    }
}
