<?php
/*
 * Copyright (c) 2022.
 * @authorAlexandre G R Alves
 * Author Github: https://github.com/04l3x4ndr3
 * Project Github:  https://github.com/04l3x4ndr3/sdk-fibank-baas
 */

namespace O4l3x4ndr3\SdkFitbank\Pix;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkFitbank\Configuration;
use O4l3x4ndr3\SdkFitbank\Helpers\CallApi;

class PixQRCode
{

    public function cancelPixOut(int $DocumentNumber, int $Bank, int $BankBranch, int $BankAccount, int $BankAccountDigit): object
    {
        $http = new CallApi($this->configuration);
        $data = [
            "DocumentNumber" => $DocumentNumber,
            "Bank" => $Bank,
            "BankBranch" => $BankBranch,
            "BankAccount" => $BankAccount,
            "BankAccountDigit" => $BankAccountDigit,
        ];
        return $http->call('CancelPixOut', array_filter($data));
    }

}
