<?php

return [
    'successes' => [
        'card_payment' => [
            'status' => 'success',
            'message' => 'AUTH_SUGGESTION',
            'data' => [
                'suggested_auth' => 'PIN'
            ]
        ],
        'validation' => [
          'status' => 'success',
          'message' => 'Charge Complete',
          'data' => [
            'data' => [
              'responsecode' => '00',
              'responsemessage' => 'successful'
            ],
            'tx' => [
              'id' => 12935,
              'txRef' => 'Ghshsh',
              'orderRef' => 'URF_1501241077083_3844735',
              'flwRef' => 'FLW-MOCK-a71d1de9130a1e221720ef52456943e5',
              'redirectUrl' => 'http =>//127.0.0',
              'device_fingerprint' => 'N/A',
              'settlement_token' => null,
              'cycle' => 'one-time',
              'amount' => 1000,
              'charged_amount' => 1000,
              'appfee' => 0,
              'merchantfee' => 0,
              'merchantbearsfee' => 0,
              'chargeResponseCode' => '00',
              'chargeResponseMessage' => 'Success-Pending-otp-validation',
              'authModelUsed' => 'PIN',
              'currency' => 'NGN',
              'IP' => ' => =>ffff =>127.0.0.1',
              'narration' => 'FLW-PBF CARD Transaction ',
              'status' => 'successful',
              'vbvrespmessage' => 'successful',
              'authurl' => 'http =>//flw-pms-dev.eu-west-1.elasticbeanstalk.com/mockvbvpage?ref=FLW-MOCK-a71d1de9130a1e221720ef52456943e5&code=00&message=Approved. Successful',
              'vbvrespcode' => '00',
              'acctvalrespmsg' => null,
              'acctvalrespcode' => null,
              'paymentType' => 'card',
              'paymentId' => '2',
              'fraud_status' => 'ok',
              'charge_type' => 'normal',
              'is_live' => 0,
              'createdAt' => '2017-07-28T11 =>24 =>37.000Z',
              'updatedAt' => '2017-07-28T13 =>42 =>20.000Z',
              'deletedAt' => null,
              'customerId' => 85,
              'AccountId' => 134,
              'customer' => [
                'id' => 85,
                'phone' => null,
                'fullName' => 'Anonymous customer',
                'customertoken' => null,
                'email' => 'user@example.com',
                'createdAt' => '2017-01-24T08 =>09 =>05.000Z',
                'updatedAt' => '2017-01-24T08 =>09 =>05.000Z',
                'deletedAt' => null,
                'AccountId' => 134
              ],
              'chargeToken' => [
                'user_token' => '1b7d7',
                'embed_token' => 'flw-t0-fcebba188b33ecc6a3dca944a638e28f-m03k'
              ]
            ]
          ]
        ],
        [
          'status' => 'success',
          'message' => 'Tx Fetched',
          'data' => [
            'txid' => 161196,
            'txref' => 'MC-1520443531487',
            'flwref' => 'FLW-MOCK-6404ffd177d60ff20b6ddf92d01dab84',
            'devicefingerprint' => '69e6b7f0b72037aa8428b70fbe03986c',
            'cycle' => 'one-time',
            'amount' => 100,
            'currency' => 'NGN',
            'chargedamount' => 100,
            'appfee' => 0,
            'merchantfee' => 0,
            'merchantbearsfee' => 1,
            'chargecode' => '02',
            'chargemessage' => 'Please enter the OTP sent to your mobile number 080****** and email te**@rave**.com',
            'authmodel' => 'PIN',
            'ip' => ' => =>ffff =>10.150.200.23',
            'narration' => 'CARD Transaction ',
            'status' => 'success-pending-validation',
            'vbvcode' => '00',
            'vbvmessage' => 'Approved. Successful',
            'authurl' => 'N/A',
            'acctcode' => null,
            'acctmessage' => null,
            'paymenttype' => 'card',
            'paymentid' => '878',
            'fraudstatus' => 'ok',
            'chargetype' => 'normal',
            'createdday' => 1,
            'createddayname' => 'MONDAY',
            'createdweek' => 23,
            'createdmonth' => 5,
            'createdmonthname' => 'JUNE',
            'createdquarter' => 2,
            'createdyear' => 2018,
            'createdyearisleap' => false,
            'createddayispublicholiday' => 0,
            'createdhour' => 7,
            'createdminute' => 9,
            'createdpmam' => 'am',
            'created' => '2018-06-04T07 =>09 =>42.000Z',
            'customerid' => 17573,
            'custphone' => '09026420185',
            'custnetworkprovider' => 'AIRTEL',
            'custname' => 'temi desola',
            'custemail' => 'desola.ade1@gmail.com',
            'custemailprovider' => 'GMAIL',
            'custcreated' => '2018-02-27T09 =>55 =>51.000Z',
            'accountid' => 134,
            'acctbusinessname' => 'Synergy Group',
            'acctcontactperson' => 'Desola Ade',
            'acctcountry' => 'NG',
            'acctbearsfeeattransactiontime' => 1,
            'acctparent' => 1,
            'acctvpcmerchant' => 'N/A',
            'acctalias' => 'temi',
            'acctisliveapproved' => 0,
            'orderref' => 'URF_1528096182393_8660935',
            'paymentplan' => null,
            'paymentpage' => null,
            'raveref' => 'RV3152809618136771B0698BF4',
            'card' => [
              'expirymonth' => '09',
              'expiryyear' => '19',
              'cardBIN' => '539983',
              'last4digits' => '8381',
              'brand' => 'GUARANTY TRUST BANK DEBITSTANDARD',
              'card_tokens' => [
                [
                  'embedtoken' => 'flw-t1nf-f22c700a552802803e89732bdf808b33-m03k',
                  'shortcode' => 'e0371',
                  'expiry' => '9999999999999'
                ]
              ],
              'type' => 'MASTERCARD',
              'life_time_token' => 'flw-t1nf-f22c700a552802803e89732bdf808b33-m03k'
            ],
            'meta' => []
          ]
        ],
        [
            'status' => 'success',
            'message' => 'BVN-DETAILS',
            'data' => [
                'bvn' => '12345678901',
                'first_name' => 'Wendy',
                'middle_name' => 'Chucky',
                'last_name' => 'Rhoades',
                'date_of_birth' => '01-01-1905',
                'phone_number' => '08012345678',
                'registration_date' => '01-01-1921',
                'enrollment_bank' => '044',
                'enrollment_branch' => 'Idejo'
            ]
        ]
    ],
];
