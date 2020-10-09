<?php
namespace App\Models;

use App\User;

class PromotionRequest extends BaseModel
{
    const TABLE = 'promotion_requests';

    protected $guarded = [];

    const STATUS_NEW = 'new';
    const STATUS_CONFIRMED = 'confirmed';
    const STATUS_TO_ORDER = 'to_order';
    const STATUS_IN_PROCESS = 'in_process';
    const STATUS_WAITING = 'waiting';
    const STATUS_COMPLETED = 'completed';

    const STATUS_ALL = [
        self::STATUS_NEW,
        self::STATUS_CONFIRMED,
        self::STATUS_TO_ORDER,
        self::STATUS_IN_PROCESS,
        self::STATUS_WAITING,
        self::STATUS_COMPLETED
    ];

    const COLUMN_USER_ID = 'user_id';
    const COLUMN_PROMOTION = 'promotion_id';
    const COLUMN_STATUS = 'status';



    public function getUserId(): int
    {
        return $this->{self::COLUMN_USER_ID};
    }

    public function setUserId(int $value): self
    {
        $this->{self::COLUMN_USER_ID} = $value;
        return $this;
    }

    public function getUser(): User
    {
        return User::getById($this->getUserId());
    }

    public function getPromotionId(): int
    {
        return $this->{self::COLUMN_PROMOTION};
    }

    public function setPromotionId(int $value): self
    {
        $this->{self::COLUMN_PROMOTION} = $value;
        return $this;
    }

    public function getPromotion(): SellerPromotion
    {
        return SellerPromotion::getById($this->getPromotionId());
    }

    public function getStatus(): string
    {
        return $this->{self::COLUMN_STATUS};
    }

    public function setStatus(string $value): self
    {
        $this->{self::COLUMN_STATUS} = $value;
        return $this;
    }

    public static function getNewRequestsByUserId(int $userId)
    {
        return self::where(self::COLUMN_USER_ID, '=', $userId)
            ->where(self::COLUMN_STATUS, SellerPromotion::STATUS_NEW)->get();
    }
}
