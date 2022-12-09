<?php

namespace App\Filament\Resources\DepositResource\Pages;

use App\Filament\Resources\DepositResource;
use App\Models\User;
use Faker\Provider\ar_EG\Text;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDeposit extends CreateRecord
{
    protected static string $resource = DepositResource::class;
    protected static bool $canCreateAnother = false;


    protected function getFormSchema(): array
    {
        return [
            Select::make("user_id")->options(User::get()->pluck("name","id"))->required(),
            TextInput::make("amount")->numeric()->required()
        ];
    }


    public function create(bool $another = false): void
    {
        $data = $this->form->getState();

     $user_id =    data_get($this->data, "user_id");
     $amount =    data_get($this->data, "amount");

       $user =  User::find($user_id);
        $user->wallet->deposit($amount);
        $this->notify("success", "deposit done" . $user->wallet->balance);
        $this->fillForm();

    }
}
