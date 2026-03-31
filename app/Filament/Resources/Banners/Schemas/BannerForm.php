<?php

namespace App\Filament\Resources\Banners\Schemas;

use App\Filament\Traits\HandlesWebpUploads;
use App\Models\Banner;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class BannerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Tiêu đề')
                    ->placeholder('VD: SIÊU CẤP LIÊN QUÂN'),
                TextInput::make('subtitle')
                    ->label('Mô tả ngắn')
                    ->placeholder('VD: Khám phá kho tài khoản bậc Thách Đấu...'),
                TextInput::make('button_text')
                    ->label('Chữ trên nút')
                    ->placeholder('VD: KHÁM PHÁ NGAY'),
                TextInput::make('url')
                    ->label('Đường dẫn (URL)')
                    ->placeholder('VD: /products?category=lien-quan'),
                TextInput::make('sort')
                    ->label('Thứ tự')
                    ->required()
                    ->numeric()
                    ->default(0),
                HandlesWebpUploads::processImageUpload(
                    FileUpload::make('image')
                        ->required()
                        ->label('Hình ảnh (1920x800)')
                        ->disk('public')
                        ->directory('banners')
                        ->image()
                ),
            ]);
    }
}
