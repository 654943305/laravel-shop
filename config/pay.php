<?php

return [
    'alipay' => [
        'app_id'         => '2016092300574645',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAs3NKVUT8c/gklQcgj+7FRA45Wx4vbDlTtJFx2Yg4HEaK+Ywyi+F/G+r8zwzFLGvvkdkzkpFXlQymkKbKdB+Xs65TGxNWmGF6+lcKUaqMFsOOaRXsDgUxZBphuedfKVKHvwy0vsYyA8LIV/KDP0tgqvWWrlUeGi+120gAUOlypHCqiQhCCdU8RGeBxs4XxGVefPRBj0fRuPvSpBHcwHGnKk2Txtxw7bj3JQqef6wC8cHH/BmBWf7w7jzUPlt1gNQ5s8H/B6z/VXG3/oxDO1/0HdpjXBgnlArTuIiK8NkLjccwALLhrep2T+IJ1ocqLoLXOhRtpCfD4uQuZWtkfoOY5QIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEAs3NKVUT8c/gklQcgj+7FRA45Wx4vbDlTtJFx2Yg4HEaK+Ywyi+F/G+r8zwzFLGvvkdkzkpFXlQymkKbKdB+Xs65TGxNWmGF6+lcKUaqMFsOOaRXsDgUxZBphuedfKVKHvwy0vsYyA8LIV/KDP0tgqvWWrlUeGi+120gAUOlypHCqiQhCCdU8RGeBxs4XxGVefPRBj0fRuPvSpBHcwHGnKk2Txtxw7bj3JQqef6wC8cHH/BmBWf7w7jzUPlt1gNQ5s8H/B6z/VXG3/oxDO1/0HdpjXBgnlArTuIiK8NkLjccwALLhrep2T+IJ1ocqLoLXOhRtpCfD4uQuZWtkfoOY5QIDAQABAoIBAQCkTYogupI/CFNOVAE/Z8ocPr3LLL8U4wQ+DvFjz/I4CWrTg8cABk4gXK5uUO3zdzwZmPo8V3EOWk/jn6M8YXS/onwbDUC7Mn2r2qfrEDFF4nVwyA6i46ROWE1kLnEV36fEiDixd7xxbxWKWNRMzpJK1aPKKMrwBQEILkuDycsavTfaqqdLE7HI9snkIQUmSQqlTS+K+5Ki1nW5aY6c+AlBas2e5SDIXokFpQCIknOPpYCaUniYcmX4i7XxxjZnbJHfTlI4Ux+iy98v5DsXUvb7aUm/yu8Tm5BDXiBHkC0+I1vYsTzEdHjENVGDuPmefI9UE/6b7n/jib7j5THXVwthAoGBAOgbXPUxRd7g/rlVQLOPKG0X5U3HvTIMxOQaNR8GEfcjxXrlGWVmv9TcOZBjZqQulV9+0AlROAOUg6bCBvTymJiDud9FLVpUCB2GaynzwauhtuTY+m/o9fO0o3oHDVCAJrdd/6jVK4PmrgTVgq7ucEbq+qhF7Df9JtPE1v8SXJT9AoGBAMXsSW1JwhMjjqfYU//09gQMxI+uu372DjQEFRT4ypmzxgJ+WojaLpSiNEsDiyL3IfIz0QgBbR2BK8gQmc2phTa1pcMTXo0Kv9JD3GX+g8rU+HsFoM8XoGarN8Ufon00AzX3NyFS00rBO+EYIVq40jc5xrlrIRMkwkefVEvFaIwJAoGAVsQb3ODdgLLVJg0TkcwbTaTYKFpZhIM3exm87+sB/kQWB5nrA3gEkBr/PdWawhdT6Y3rUQBWkygKiuUPWrPxjVn4utkOWiz9l6PvHZCsvm9GgogGHp2Ui9TkI7LNLGGrl3KBJukBSl6KgO4b2y7xM+GVcCArbMaqpBF6WYHQsDUCgYEAgZnh0uBzZtjnttye1IHw/mHl7Df8qnwwfLsXmu32rILdbBCU8/v6eHVmTKB7YV/2KITpoZZdfu5wXscQD22rv1Few8hRJ4YcaXDqRxdL8WtXcicTT8gmzlPbZwb5/YYrfBDvVrDHjrHNpe2JGcDgVi1NBWky9Tgix4d7SUpw1RECgYAi1Cy6lcuyOpKMSTN3THeR/aXjr/2yr+0AUoxnXQPOdf5RyBHuLdhecB8ngiHfGhPMdsvNwVb/rkzZaaUzNYCcSTO4UFxW+p0jdwSIFRgV3OA2QwQ4YoPcjwZxBFHaE2JkAGTf7toZuNp+DWQv1cwYouvyRCA4idMg7Jy7nSZe2Q==',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];