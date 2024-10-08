<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use App\Models\ProductCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ReplicateAction;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $pluralModelLabel = 'Продукты';

    public static function form(Form $form): Form
    {
        return $form
                ->schema([
                    Forms\Components\Card::make()
                        ->schema([
                            Forms\Components\TextInput::make('title')
                                ->required()
                                ->maxLength(2048)
//                                ->reactive()
//                                ->afterStateUpdated(function ($set, $state) {
//                                    $set('slug', Str::slug($state));
//                                })
                            ,
                            Forms\Components\TextInput::make('price')
                                ->label('Цена')
                                ->maxLength(2048),
                            Forms\Components\TextInput::make('slug')
                                ->required()
                                ->maxLength(2048),
                            TinyEditor::make('body')
                                ->showMenuBar()
                                ->fileAttachmentsDirectory('products'),
                            Forms\Components\TextInput::make('description')
                                ->maxLength(2048)
                                ->label('Краткое описание'),
                            Forms\Components\TextInput::make('key_words')
                                ->maxLength(2048)
                                ->label('Ключевые слова (через запятую)'),
                            Forms\Components\TextInput::make('order')
                                ->required()
                                ->label('Сортировка'),
                            Forms\Components\Toggle::make('active')
                                ->required()->label('Опубликован'),
                            Forms\Components\Toggle::make('is_new')->label('Новый товар'),
                            Forms\Components\Toggle::make('sale')->label('Акция'),
                            Forms\Components\Toggle::make('show_in_main')->label('Показывать на главной'),
                        ])->columnSpan(8),

                    Forms\Components\Card::make()
                        ->schema([
                            Forms\Components\FileUpload::make('images')
                                ->getUploadedFileNameForStorageUsing(
                                    fn (TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName()),
                                )->directory('products')
                            ->multiple()
                            ->reorderable(),
                            Forms\Components\Select::make('category_id')
                                ->label('Категория')
                                ->options(ProductCategory::all()->pluck('title', 'id'))
                                ->searchable(),
                        ])->columnSpan(4)
                ])->columns(12);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('thumbnail'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                ReplicateAction::make()
//                    ->excludeAttributes(['slug'])
//                    ->excludeAttributes(['images'])
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
