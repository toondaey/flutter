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
]
    ],
];
