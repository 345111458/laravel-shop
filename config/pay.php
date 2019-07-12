<?php

return [
    'alipay' => [
        'app_id' => '2016100100641252',

        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAoEZ6F+N6Mged+WfXw/CSYdy9G51cutJzyTWNpNz+8WAwth+nrMrncyaDI/kC82mYEyt83YcK0D6XP/FouejHdDtLIbNoA2zsoBc7SUUjvbjD6EJ0D8a345aIPhKHaHTRV0bdVVljjiWbXWyBCLuUZ+IGBy1v1UCDdHMCX3kVoYkQpHcS0PYXSWh5AJH2zoTZMzKtk3aU1v9eYb7AdYTPSPG+BsjTUO0aPz0crKzLjWBYNQHhNhl3yEMpaYcN0qoi9BeRiBGDsAZSOwa3tkMeqS/Uw8ISBaZdOCzZhuF+Q6AQ8qaCaxzrXQsmuC5Ne7f9jbb01JfNP4LDSyxAv8qhRwIDAQAB',

        

        'private_key' => 'MIIEowIBAAKCAQEAyQlCjK1J3on25qHLpExYfdpMgJ9rcAuuhYSckjP2sodrCDi7rTqGf6DgQDOUv287LZjnQtyR6Bg4MOJbQ6hB9mXL1HnqMTWeMRzu+CBMrn1EacPKIrBexIkwV20iB5gqhJkEnK5GAYpCCtyre8NSPF4ViLOYr/s3tz2ECPY54ttVQhVG6F4U4Cn6XDmq9wpAlVGU3lmDNNHQRyzVpkBKqOZu/rOXn+SD/1G4Ymd8TBmAAVSH4xOXf2gWt+G54f6yzgxdjrhroAUUb2gnbOizqlya5yty0ZZy7OSsRGEws724DYTC4ltpy/2vxhyT2frUNkVsvsAYCLPT3HJHl7bofwIDAQABAoIBAHohXAKmi8fcPNij1lk74E6kvfEt6FErZ5zJkWzokKioyAc4oBt/AJKso0+dhnI+Gs96opPl9+XuQMTB3vvdTiVodkngvruifTYNA8hNpwgiJduzDCvCxe/UAEA8ln3SnZHse/bLkNACtFhw8uS/JkhyR9bCdLIEhjaV8o6XN1dvH2noq5m3lDGTygtV0WkVqyTvhlIYRD3ZYIQ/M8ZyHIcC4TCOpR9mYf/hJG8orDMot99N3fbFb7aQUqkmkXgIwdbH/r6DF2i3C9vIKorsawb5IpVTBH+W+jLyiVNlnUPYbo7pmSkO+lw/3Yea/EouqeYaP8jyVcGNNvCaxcSlEyECgYEA9mKSzT0a8nCdgVZuxr/mmcfNHJ56+MoLCqCPl2EM3fhffPww0xLXgljR2IvQ4ihHz8HOjxryUUhPfRNtqEg7pujCzioqg1/iareWkaQ/5ff1HlHAOyzi588cAEkE9JD9D8HGmmHY3a+pHuRnY6Rov4BPdrvO2Iws07XrH4hNIYkCgYEA0OGk07KsvWBCLyLHh79lDha8ohxO5QN9L5rp4zMRvQ5bJMIY3pDpc/WeVlOUEqZxadPmvxn5PRWy74K6I0drTgym+gx3PGS39ia/RUmPUNG+Fl78YUD20HuKOQ3l6FuOZhJ22aQ4gRuOqv2PC/0SR5rdPsO5C9EF2LKjJl3QX8cCgYEAwTy+dkmegNbiMTZg23BWo/WYYQHK4KVV05fqBogPV2gdPCFvCZyVeZ2/t16xDS8aY09VeddghW95KFe8gWdloZqcbqWTgkYJhjlG1iNEGlFG5eioI8EolTZSd8bNJCMy1tDbuulS9Ut4EMqCbBveK5Ouvyi9KgmGfuUG60wzckECgYBLrKPpaj74sOnpZ8E/5dA3pXcbiAPxJi1xVL9NZ5ASnSPaElOuNnPNZfvCLK9lflVyUKm1LDTGs5jK+uJyq4otkZng1ylPgPHAxNLgyECauBIUyr7GgSGp8EfoWaekYZ8aTbAvMzahV5l9SzVK05mOxYVIGuJsbIKguj8vRCecuwKBgC1R03xNIbMGJZRXlyeNbrzh4QmaTrGsMvJgbhiG1V+1sRwerqiyNE0YOpVorgDXscv80SgDFSOvzGiDN/7WvS2OKc6L4k0SwamlWuQ3oD6cZPNb+5UYW9vsKtbSlaViuI/zaMBOMgeI8BxOG9fk8Unc795QYXcLcIddKXOIt56k',

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