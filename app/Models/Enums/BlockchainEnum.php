<?php

namespace App\Models\Enums;

enum BlockchainEnum: string implements Enum
{

    use EnumEnhancer;

    case TRON     = 'tron';
    case SOLANA   = 'solana';
    case BINANCE   = 'binance';
    case ETHEREUM   = 'ethereum';

    public function label(): string
    {
        return match ($this) {
            self::TRON     => __('Tron'),
            self::SOLANA   => __('Solana'),
            self::BINANCE   => __('Binance'),
            self::ETHEREUM   => __('Ethereum'),
        };
    }

    public function badgeColor(): string
    {
        return match ($this) {
            self::TRON     => 'danger',
            self::SOLANA   => 'info',
            self::BINANCE   => 'warning',
            self::ETHEREUM   => 'primary',
        };
    }

    public function logo()
    {
        return match ($this) {
            self::TRON     => 'images/logo/tron.svg',
            self::SOLANA   => 'images/logo/solana.svg',
            self::BINANCE   => 'images/logo/binance.svg',
            self::ETHEREUM   => 'images/logo/ethereum.svg',
        };
    }

    public function explorerTransactionUrl(string $trx)
    {
        return match ($this) {
            self::TRON     => 'https://tronscan.org/#/transaction/'.$trx,
            self::SOLANA   => 'https://solscan.io/tx/'.$trx,
            self::BINANCE   => 'https://bscscan.com/tx/'.$trx,
            self::ETHEREUM   => 'https://etherscan.io/tx/'.$trx,
        };
    }

    public function explorerAddressUrl(string $trx)
    {
        return match ($this) {
            self::TRON     => 'https://tronscan.org/#/address/'.$trx,
            self::SOLANA   => 'https://solscan.io/account/'.$trx,
            self::BINANCE   => 'https://bscscan.com/address/'.$trx,
            self::ETHEREUM   => 'https://etherscan.io/address/'.$trx,
        };
    }
}
