<?php

declare(strict_types=1);

namespace App\Enums;

enum Constants: string
{
    case PHONE_CONTACT_DB_NAME = 'CELLULAR PHONE NUMBER';
    case ORDER_CANCELLED = 'ORDER WAS CANCELED';
    case SAP_ACC_RECEIVABLE_THIRD_ACCOUNT = '1102010002';
    case SAP_ACC_RECEIVABLE_RELATED_ACCOUNT = '1102010001';
    case SAP_ACC_PAYABLE_THIRD_ACCOUNT = '2101010002';
    case SAP_ACC_PAYABLE_RELATED_ACCOUNT = '2101010001';
    case OFFICE_CARE_TIME_START = ' 08:00:00';
    case OFFICE_CARE_TIME_END = ' 17:00:00';
    case HOMECARE_TYPE = '1';
    case OFFICECARE_TYPE = '2';
    case OFFICECARE_WALKIN_TYPE = '3';
    case DEFAULT_EMAIL_VIRTU = 'care@virtudigilab.com';
    case DEFAULT_URL_VIRTU = 'https://virtudigilab.com/';
    case SUBJECT_EMAIL_WELCOME_MESSAGE = 'Account Activated';
    case SUBJECT_EMAIL_EXPIRED_CONTRACT = 'Corporate Contract Reminder';
    case VIEW_EMAIL_WELCOME_MESSAGE = 'mail.digilab-registration-confirmed';
    case VIEW_EMAIL_SERVED_MESSAGE = 'mail.served-treatment';
    case SUBJECT_EMAIL_SERVED_MESSAGE = 'Thank you, We Have Received Your Sample';

    case VIEW_EMAIL_COMPLETE_OUTPATIENT = 'mail.outpatient-result';
    // service late Email
    case SUBJECT_EMAIL_SERVICE_LATE = 'Late Notification';
    case VIEW_EMAIL_SERVICE_LATE = 'mail.digilab-servicecare-late';
    // service update status Email
    case SUBJECT_EMAIL_SERVICE_UPDATE = 'Homecare Notification';
    case VIEW_EMAIL_SERVICE_UPDATE_PROGRESS = 'mail.digilab-servicecare-update-progress';
    case VIEW_EMAIL_SERVICE_UPDATE_DONE = 'mail.digilab-servicecare-update-done';
    case VIEW_EMAIL_SERVICE_UPDATE_CANCEL = 'mail.digilab-servicecare-update-cancel';
    case SUBJECT_EMAIL_PAYMENT_MIDTRANS = 'Payment Successful';
    case SUBJECT_EMAIL_BOOKING_MIDTRANS = 'Booking Detail Confirmation';
    case SUBJECT_EMAIL_RESCHEDULE_HOMECARE = 'Reschedule Detail Confirmation';
    case VIEW_EMAIL_PAYMENT_MIDTRANS = 'mail.payment-successfull';
    case STR_PHFC = 'PRIVATE HEALTH FACILITY';
    // request add family member Email
    case SUBJECT_EMAIL_REQUEST_FAMILY_MEMBER = 'Add Family Member - Confirmation';
    case VIEW_EMAIL_REQUEST_FAMILY_MEMBER = 'mail.digilab-request-family-member';
    case VIEW_EMAIL_REGENERATE_REMUN = 'mail.remuneration';
    case SUBJECT_EMAIL_REGENERATE_REMUN = 'We have got some remuneration news for you!';
    case VIEW_EMAIL_CANCEL_NURSE = 'mail.cancel-service-nurse';
    case SUBJECT_EMAIL_CANCEL_NURSE = 'Our team couldn’t reach you';
    case USERNAME_FIRST_FORMAT = 'virtu';
    case PG_DUPLICATE_ERROR_CODE = '23505';
    case DEFAULT_QUEUE_WAITING_TIME = '10';     // in minutes
    case BASE_PATH_PHOTO = 'app/uploads/';
    case HEADER_MCU_REPORT_RADIOLOGY = 'mcu-report.header.radiology';
    case HEADER_MCU_REPORT_PATOLOGY = 'mcu-report.header.pathology-anatomy';
    case HEADER_MCU_REPORT_MICROBIOLOGY = 'mcu-report.header.microbiology';
    case HEADER_MCU_REPORT_SUPPORTIVE = 'mcu-report.header.supportive';
    // request add family member Email
    case SUBJECT_EMAIL_SUBSCRIPTION_BOOKING = 'DEAL - Booking Confirmation';
    case VIEW_EMAIL_SUBSCRIPTION_BOOKING = 'mail.digilab-subscription-booking';
    // request add family member Email
    case SUBJECT_EMAIL_GIFT_SUBSCRIPTION_ASSIGNED = 'Family Package - Assign Successful';
    case VIEW_EMAIL_GIFT_SUBSCRIPTION_ASSIGNED = 'mail.digilab-subscription-gift-assigned';
    // Family Package - Assign Successful
    case SUBJECT_EMAIL_GIFT_SUBSCRIPTION_SUCCESS = 'DEAL - Assign Confirmation';
    case VIEW_EMAIL_GIFT_SUBSCRIPTION_SUCCESS = 'mail.digilab-subscription-gift-success';
    case VIEW_EMAIL_DEPOSIT_TRANSFFER = 'mail.deposit-transfer-reminder';
    case SUBJECT_EMAIL_DEPOSIT_TRANSFFER = 'Expiration Reminder';

    case SUBJECT_COMPANY_REGISTRATION_CONFIRMATION = 'Company Registration Confirmation';
    case VIEW_COMPANY_REGISTRATION_CONFIRMATION = 'mail.company-registration-confirmed';

    case USER_ACCESS_HIS_VALUE = 'HIS';
    case USER_ACCESS_VIRTU_VALUE = 'VIRTU';
    case VIEW_CONFIRM_BOOKING_EMPLOYEE = 'mail.confirm-booking';
    case VIEW_CONFIRM_BOOKING_COMPANY = 'mail.confirm-booking-company';
    case VIEW_CONFIRM_BOOKING_RESCHEDULE = 'mail.confirm-booking-reschedule';
    case VIEW_CONFIRM_HOMECARE_RESCHEDULE = 'mail.confirm-homecarereschedule';

    case VIEW_EMAIL_TELEMEDICINE = 'mail.telemedicine';
}
