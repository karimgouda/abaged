<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Skill;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\TextArea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Concerns\Translatable;
use App\Filament\Resources\SkillResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SkillResource\RelationManagers;

class SkillResource extends Resource
{
    use Translatable;

    protected static ?string $model = Skill::class;

    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static ?string $navigationGroup = 'Home Page';

    protected static ?int $navigationSort = 5;
    protected static ?string $navigationLabel = 'Statistics';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    TextInput::make('title')
                        ->required()
                        ->label('Satisfied clients')
                        ->numeric(),
                    Forms\Components\TextInput::make('sub_title')->numeric()->label('Finished Project'),
                    Forms\Components\TextInput::make('description')->numeric()->label('Team Members'),
                    TextInput::make('icon')->numeric()
                        ->required()
                        ->label('Student Count'),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable()->searchable(),
                TextColumn::make('title')->searchable()->label('Satisfied clients'),
                TextColumn::make('sub_title')->limit(50)->searchable()->label('Finished Project'),
                TextColumn::make('description')->limit(50)->searchable()->label('Team Members'),
                TextColumn::make('icon')->limit(50)->searchable()->label('Student Count'),
                TextColumn::make('created_at')
                    ->dateTime(),
                TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->defaultSort('id', 'desc')
            ->filters([
                //
            ])
            ->actions([
//                Tables\Actions\EditAction::make(),
//                 Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                 Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListSkills::route('/'),
            'create' => Pages\CreateSkill::route('/create'),
            'edit' => Pages\EditSkill::route('/{record}/edit'),
        ];
    }
}
