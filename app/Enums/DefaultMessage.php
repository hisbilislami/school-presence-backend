<?php

declare(strict_types=1);

namespace App\Enums;

enum DefaultMessage: string
{
    case ACTION_SUCCESS = 'Success.';
    case ACTION_FAILED = 'Cannot perform this action. We will fix this shortly.';
    case INVALID_REQUEST = 'Cannot perform your invalid request.';
    case REGISTRATION_NOT_FOUND = 'Cannot perform this action. Current registration not found / has been voided.';
    case ACCOUNT_ALREADY_EXIST = 'Cannot create this user. Account already exists.';
    case CODE_ALREADY_EXIST = 'Cannot create this data. Code already exists.';
    case ERR_VALIDATION_PATIENT = 'Cannot Validation Patient';
    case ERR_CONTRACT_EMAIL = "You're not allowed to send email until your contract billing is paid!";
}
