<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property bool $personal_company
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CompanyInvitation> $companyInvitations
 * @property-read int|null $company_invitations_count
 * @property-read \App\Models\User|null $owner
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @method static \Database\Factories\CompanyFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Company newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company query()
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company wherePersonalCompany($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereUserId($value)
 */
	class Company extends \Eloquent implements \Filament\Models\Contracts\HasAvatar {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $company_id
 * @property string $email
 * @property string|null $role
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Company $company
 * @method static \Illuminate\Database\Eloquent\Builder|CompanyInvitation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CompanyInvitation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CompanyInvitation query()
 * @method static \Illuminate\Database\Eloquent\Builder|CompanyInvitation whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CompanyInvitation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CompanyInvitation whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CompanyInvitation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CompanyInvitation whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CompanyInvitation whereUpdatedAt($value)
 */
	class CompanyInvitation extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property string $provider
 * @property string $provider_id
 * @property string|null $name
 * @property string|null $nickname
 * @property string|null $email
 * @property string|null $telephone
 * @property string|null $avatar_path
 * @property string $token
 * @property string|null $secret
 * @property string|null $refresh_token
 * @property string|null $expires_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|ConnectedAccount newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ConnectedAccount newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ConnectedAccount query()
 * @method static \Illuminate\Database\Eloquent\Builder|ConnectedAccount whereAvatarPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConnectedAccount whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConnectedAccount whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConnectedAccount whereExpiresAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConnectedAccount whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConnectedAccount whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConnectedAccount whereNickname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConnectedAccount whereProvider($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConnectedAccount whereProviderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConnectedAccount whereRefreshToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConnectedAccount whereSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConnectedAccount whereTelephone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConnectedAccount whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConnectedAccount whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConnectedAccount whereUserId($value)
 */
	class ConnectedAccount extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $company_id
 * @property int $user_id
 * @property string|null $role
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Employeeship newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employeeship newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employeeship query()
 * @method static \Illuminate\Database\Eloquent\Builder|Employeeship whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employeeship whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employeeship whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employeeship whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employeeship whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employeeship whereUserId($value)
 */
	class Employeeship extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $company_id
 * @property int $wallet_id
 * @property string $trx
 * @property int $amount
 * @property string $currency
 * @property string $blockchain
 * @property \App\Models\Enums\PayoutStatusEnum $status
 * @property string $type
 * @property int $version
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Transaction> $Transactions
 * @property-read int|null $transactions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Company> $companies
 * @property-read int|null $companies_count
 * @property-read \App\Models\Company|null $company
 * @property-read \App\Models\Company|null $currentCompany
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Company> $ownedCompanies
 * @property-read int|null $owned_companies_count
 * @property-read \App\Models\Wallet $wallet
 * @method static \App\Models\Queries\PayoutQueryBuilder|Payout company(int $id)
 * @method static \Database\Factories\PayoutFactory factory($count = null, $state = [])
 * @method static \App\Models\Queries\PayoutQueryBuilder|Payout newModelQuery()
 * @method static \App\Models\Queries\PayoutQueryBuilder|Payout newQuery()
 * @method static \App\Models\Queries\PayoutQueryBuilder|Payout query()
 * @method static \App\Models\Queries\PayoutQueryBuilder|Payout whereAmount($value)
 * @method static \App\Models\Queries\PayoutQueryBuilder|Payout whereBlockchain($value)
 * @method static \App\Models\Queries\PayoutQueryBuilder|Payout whereCompanyId($value)
 * @method static \App\Models\Queries\PayoutQueryBuilder|Payout whereCreatedAt($value)
 * @method static \App\Models\Queries\PayoutQueryBuilder|Payout whereCurrency($value)
 * @method static \App\Models\Queries\PayoutQueryBuilder|Payout whereId($value)
 * @method static \App\Models\Queries\PayoutQueryBuilder|Payout whereStatus($value)
 * @method static \App\Models\Queries\PayoutQueryBuilder|Payout whereTrx($value)
 * @method static \App\Models\Queries\PayoutQueryBuilder|Payout whereType($value)
 * @method static \App\Models\Queries\PayoutQueryBuilder|Payout whereUpdatedAt($value)
 * @method static \App\Models\Queries\PayoutQueryBuilder|Payout whereVersion($value)
 * @method static \App\Models\Queries\PayoutQueryBuilder|Payout whereWalletId($value)
 */
	class Payout extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $company_id
 * @property int $wallet_id
 * @property int|null $payout_id
 * @property string $trx
 * @property int $amount
 * @property string $currency
 * @property string $blockchain
 * @property string $status
 * @property int $version
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Company> $companies
 * @property-read int|null $companies_count
 * @property-read \App\Models\Company|null $company
 * @property-read \App\Models\Company|null $currentCompany
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Company> $ownedCompanies
 * @property-read int|null $owned_companies_count
 * @property-read \App\Models\Payout|null $payout
 * @property-read \App\Models\Wallet $wallet
 * @method static \App\Models\Queries\TransactionQueryBuilder|Transaction company(int $id)
 * @method static \Database\Factories\TransactionFactory factory($count = null, $state = [])
 * @method static \App\Models\Queries\TransactionQueryBuilder|Transaction newModelQuery()
 * @method static \App\Models\Queries\TransactionQueryBuilder|Transaction newQuery()
 * @method static \App\Models\Queries\TransactionQueryBuilder|Transaction query()
 * @method static \App\Models\Queries\TransactionQueryBuilder|Transaction whereAmount($value)
 * @method static \App\Models\Queries\TransactionQueryBuilder|Transaction whereBlockchain($value)
 * @method static \App\Models\Queries\TransactionQueryBuilder|Transaction whereCompanyId($value)
 * @method static \App\Models\Queries\TransactionQueryBuilder|Transaction whereCreatedAt($value)
 * @method static \App\Models\Queries\TransactionQueryBuilder|Transaction whereCurrency($value)
 * @method static \App\Models\Queries\TransactionQueryBuilder|Transaction whereId($value)
 * @method static \App\Models\Queries\TransactionQueryBuilder|Transaction wherePayoutId($value)
 * @method static \App\Models\Queries\TransactionQueryBuilder|Transaction whereStatus($value)
 * @method static \App\Models\Queries\TransactionQueryBuilder|Transaction whereTrx($value)
 * @method static \App\Models\Queries\TransactionQueryBuilder|Transaction whereUpdatedAt($value)
 * @method static \App\Models\Queries\TransactionQueryBuilder|Transaction whereVersion($value)
 * @method static \App\Models\Queries\TransactionQueryBuilder|Transaction whereWalletId($value)
 */
	class Transaction extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $current_company_id
 * @property int|null $current_connected_account_id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed|null $password
 * @property string|null $remember_token
 * @property string|null $profile_photo_path
 * @property string $status
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Transaction> $Transactions
 * @property-read int|null $transactions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Company> $companies
 * @property-read int|null $companies_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ConnectedAccount> $connectedAccounts
 * @property-read int|null $connected_accounts_count
 * @property-read \App\Models\Company|null $currentCompany
 * @property-read \App\Models\ConnectedAccount|null $currentConnectedAccount
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Company> $ownedCompanies
 * @property-read int|null $owned_companies_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Payout> $payouts
 * @property-read int|null $payouts_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read mixed $profile_photo_url
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Role> $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Wallet> $wallets
 * @property-read int|null $wallets_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \App\Models\Queries\UserQueryBuilder|User newModelQuery()
 * @method static \App\Models\Queries\UserQueryBuilder|User newQuery()
 * @method static \App\Models\Queries\UserQueryBuilder|User permission($permissions, $without = false)
 * @method static \App\Models\Queries\UserQueryBuilder|User query()
 * @method static \App\Models\Queries\UserQueryBuilder|User role($roles, $guard = null, $without = false)
 * @method static \App\Models\Queries\UserQueryBuilder|User user(int $id)
 * @method static \App\Models\Queries\UserQueryBuilder|User whereCreatedAt($value)
 * @method static \App\Models\Queries\UserQueryBuilder|User whereCurrentCompanyId($value)
 * @method static \App\Models\Queries\UserQueryBuilder|User whereCurrentConnectedAccountId($value)
 * @method static \App\Models\Queries\UserQueryBuilder|User whereEmail($value)
 * @method static \App\Models\Queries\UserQueryBuilder|User whereEmailVerifiedAt($value)
 * @method static \App\Models\Queries\UserQueryBuilder|User whereId($value)
 * @method static \App\Models\Queries\UserQueryBuilder|User whereName($value)
 * @method static \App\Models\Queries\UserQueryBuilder|User wherePassword($value)
 * @method static \App\Models\Queries\UserQueryBuilder|User whereProfilePhotoPath($value)
 * @method static \App\Models\Queries\UserQueryBuilder|User whereRememberToken($value)
 * @method static \App\Models\Queries\UserQueryBuilder|User whereStatus($value)
 * @method static \App\Models\Queries\UserQueryBuilder|User whereUpdatedAt($value)
 * @method static \App\Models\Queries\UserQueryBuilder|User withoutPermission($permissions)
 * @method static \App\Models\Queries\UserQueryBuilder|User withoutRole($roles, $guard = null)
 */
	class User extends \Eloquent implements \Filament\Models\Contracts\FilamentUser, \Filament\Models\Contracts\HasAvatar, \Filament\Models\Contracts\HasDefaultTenant, \Filament\Models\Contracts\HasTenants {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $company_id
 * @property mixed $private_key
 * @property string $public_key
 * @property string $address_base58
 * @property string $status
 * @property string $type
 * @property string $blockchain
 * @property float $balance
 * @property float $balance_usdt
 * @property float $balance_usdc
 * @property int $version
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Transaction> $Transactions
 * @property-read int|null $transactions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Company> $companies
 * @property-read int|null $companies_count
 * @property-read \App\Models\Company|null $company
 * @property-read \App\Models\Company|null $currentCompany
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Company> $ownedCompanies
 * @property-read int|null $owned_companies_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Payout> $payouts
 * @property-read int|null $payouts_count
 * @method static \App\Models\Queries\WalletQueryBuilder|Wallet blockchain(\App\Models\Enums\BlockchainEnum $blockchain)
 * @method static \App\Models\Queries\WalletQueryBuilder|Wallet company(int $id)
 * @method static \Database\Factories\WalletFactory factory($count = null, $state = [])
 * @method static \App\Models\Queries\WalletQueryBuilder|Wallet newModelQuery()
 * @method static \App\Models\Queries\WalletQueryBuilder|Wallet newQuery()
 * @method static \App\Models\Queries\WalletQueryBuilder|Wallet query()
 * @method static \App\Models\Queries\WalletQueryBuilder|Wallet whereAddressBase58($value)
 * @method static \App\Models\Queries\WalletQueryBuilder|Wallet whereBalance($value)
 * @method static \App\Models\Queries\WalletQueryBuilder|Wallet whereBalanceUsdc($value)
 * @method static \App\Models\Queries\WalletQueryBuilder|Wallet whereBalanceUsdt($value)
 * @method static \App\Models\Queries\WalletQueryBuilder|Wallet whereBlockchain($value)
 * @method static \App\Models\Queries\WalletQueryBuilder|Wallet whereCompanyId($value)
 * @method static \App\Models\Queries\WalletQueryBuilder|Wallet whereCreatedAt($value)
 * @method static \App\Models\Queries\WalletQueryBuilder|Wallet whereId($value)
 * @method static \App\Models\Queries\WalletQueryBuilder|Wallet wherePrivateKey($value)
 * @method static \App\Models\Queries\WalletQueryBuilder|Wallet wherePublicKey($value)
 * @method static \App\Models\Queries\WalletQueryBuilder|Wallet whereStatus($value)
 * @method static \App\Models\Queries\WalletQueryBuilder|Wallet whereType($value)
 * @method static \App\Models\Queries\WalletQueryBuilder|Wallet whereUpdatedAt($value)
 * @method static \App\Models\Queries\WalletQueryBuilder|Wallet whereVersion($value)
 */
	class Wallet extends \Eloquent {}
}

