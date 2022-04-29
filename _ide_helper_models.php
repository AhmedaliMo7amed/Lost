<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\ContactInfo
 *
 * @property int $id
 * @property int $user_id
 * @property string $mobile_1
 * @property string|null $mobile_2
 * @property string $address_1
 * @property string|null $address_2
 * @property string|null $facebookLink
 * @property string|null $whatsapp
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|ContactInfo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactInfo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactInfo query()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactInfo whereAddress1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactInfo whereAddress2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactInfo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactInfo whereFacebookLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactInfo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactInfo whereMobile1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactInfo whereMobile2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactInfo whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactInfo whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactInfo whereWhatsapp($value)
 */
	class ContactInfo extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Owner
 *
 * @property int $id
 * @property string $firstName
 * @property string $lastName
 * @property string $email
 * @property string $mobile
 * @property string $password
 * @property string $confirmPassword
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Review[] $review
 * @property-read int|null $review_count
 * @property-read \App\Models\StoreInfo|null $storeInformation
 * @method static \Illuminate\Database\Eloquent\Builder|Owner newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Owner newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Owner query()
 * @method static \Illuminate\Database\Eloquent\Builder|Owner whereConfirmPassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner whereUpdatedAt($value)
 */
	class Owner extends \Eloquent implements \Tymon\JWTAuth\Contracts\JWTSubject {}
}

namespace App\Models{
/**
 * App\Models\Report
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $serialNumber
 * @property string $type
 * @property string $brand
 * @property string $model
 * @property string $color
 * @property int|null $frontCrach_top
 * @property int|null $frontCrach_center
 * @property int|null $frontCrach_bottom
 * @property int|null $backCrach_top
 * @property int|null $backCrach_center
 * @property int|null $backCrach_bottom
 * @property string|null $crachNotes
 * @property string|null $estimatedDevice
 * @property string|null $additional_info
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Report newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Report newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Report query()
 * @method static \Illuminate\Database\Eloquent\Builder|Report whereAdditionalInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Report whereBackCrachBottom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Report whereBackCrachCenter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Report whereBackCrachTop($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Report whereBrand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Report whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Report whereCrachNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Report whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Report whereEstimatedDevice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Report whereFrontCrachBottom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Report whereFrontCrachCenter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Report whereFrontCrachTop($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Report whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Report whereModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Report whereSerialNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Report whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Report whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Report whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Report whereUserId($value)
 */
	class Report extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Review
 *
 * @property int $id
 * @property int $owner_id
 * @property int $report_id
 * @property string $theifName
 * @property string $theifNatID
 * @property string $theifMobile
 * @property string|null $theifPicture
 * @property string|null $additional_info
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|Review newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Review newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Review query()
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereAdditionalInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereReportId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereTheifMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereTheifName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereTheifNatID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereTheifPicture($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereUpdatedAt($value)
 */
	class Review extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\StoreInfo
 *
 * @property int $id
 * @property int $owner_id
 * @property string $government
 * @property string $city
 * @property string $street
 * @property string|null $addressNotes
 * @property string|null $mapUrl
 * @property string $storeMobile_1
 * @property string|null $storeMobile_2
 * @property string|null $facebookLink
 * @property string|null $whatsapp
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|StoreInfo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StoreInfo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StoreInfo query()
 * @method static \Illuminate\Database\Eloquent\Builder|StoreInfo whereAddressNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreInfo whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreInfo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreInfo whereFacebookLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreInfo whereGovernment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreInfo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreInfo whereMapUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreInfo whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreInfo whereStoreMobile1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreInfo whereStoreMobile2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreInfo whereStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreInfo whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreInfo whereWhatsapp($value)
 */
	class StoreInfo extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $firstName
 * @property string $lastName
 * @property string $email
 * @property string $national_id
 * @property string $password
 * @property string $confirmPassword
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Report[] $report
 * @property-read int|null $report_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereConfirmPassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereNationalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent implements \Tymon\JWTAuth\Contracts\JWTSubject {}
}

