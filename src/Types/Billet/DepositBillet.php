<?php

namespace WeDevBr\Bankly\Types\Billet;

use Illuminate\Contracts\Support\Arrayable;
use WeDevBr\Bankly\Validators\Billet\DepositBilletValidator;

class DepositBillet implements Arrayable
{
    public mixed $account;

    public mixed $payer;

    public ?string $alias;

    public ?string $documentNumber;

    public ?string $amount;

    public string $dueDate;

    /**
     * [Deposit, Levy]
     * */
    public string $type;

    public ?string $closePayment = null;

    /** @var ?Interest */
    public ?Interest $interest;

    /** @var ?Fine */
    public ?Fine $fine;

    /** @var ?Discounts */
    public ?Discounts $discounts;

    /**
     * This validate and return an array
     */
    public function toArray(): array
    {
        $this->validate();

        return json_decode(json_encode($this), true);
    }

    /**
     * This function validate a virtual card address
     */
    public function validate(): void
    {
        $depositBilletValidator = new DepositBilletValidator($this);
        $depositBilletValidator->validate();
    }
}
