<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/7/18
 * Time: 15:05
 */
return [
    'alipay' => [
        'app_id'         => '2016091900546017',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAsqKWcSva0zL6enyjPO+CAHn3fd9DwiqU9H7ZUFWuXLKlqPl6slD0lIu0hMw4d1Eqaf/iTmhWu/L8WeFdhFzFCSXCXS0zIky++QGN3xrJHFRmaboDqVxqRtX+v5Wv9V/0pNJXeUI5/BM2SLzgyIAi6c84XRNgjjn4lV4cXYtxCWyN+5vveQnAS+yA+I7m1Na9lRq+Kn9cNGpiChSY8INwBmmy4k37WlXub2snCpBa68KHeAUME/pz5mVeWJ0Kcjk4LRgJQm76PrF1G0IYYssWBZ2jbJXh5LBDjvwPHrJj+HzOAygrkwdCevEOn41GhuWaB8PGAV5lIVzSuyFV3dPfoQIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEAsJ3ahGDO1KEymOE3w4cu39ZVhgICtxENZC8UHbatP4tp1/dP4cvbb74gBqN9zoVbzD2ido0STnyVQKQseCr4aSxQF9N3+v68zxLayjyGglM6oDZBPpZm6exGYP3MCh3km9ktYR01Uii/RzQf+Tux3yz9LP/dJXyNDhP8WiUWYo7yI7QSWmiQeoCIntWYPq9f883qGhA9N3ctHOKZDjqHnh9hs7iNm8cSYxbK9kUXH7naRwcAVpruVYKIrZKZbQyUCixTGGMz5istPegDJBzqgICO0+g6PYKoaxsYMCL5K+LwPey0I9yi+WGy7SrMdf9Fb9V1MZY46WzThVEJ3CEWgQIDAQABAoIBAQCSgk/LsnbAwfu0AFf+1fwXaLhHUxGnhPjD253nTCuJY//oTFqypyYgGup8N1FcaRoOYi6MA1hlTUmOduIAyTyKGl1SdnS3/Grpp+1hCDZYk+w1DOywm5lBgWOcf8yrs8J5Wf4f6lfaEL0jtuSzHkbeKHbYxmNP/nMQc5nJuaxJEoRz9ktl6d6EoNs8NcMH2sMQI0WpZ5KryqHQSruvGyMs1dT4xonVdIii5LK99iebR3sCGeVZU1wGQ+p9ipaDVVi8kI/EhKyPQ7puMzwYUfW3V2wjHrWXmMroIRRrP2cPFgM6cwuzD0qR8S6nInqYPHhwHPJs85fMCHIIwcBGZNMBAoGBANrRs5jj8E6KpftW2zOVFmB0So4ebEZpDur9cIzaKXknwdPp9BLL/RaOyfAc4/70GYe4wjjPgmK4IrlUxvcI/1k708wwXrHrPMGzrQwI2EtzB6cKkx98z4Zr5JBNbwWUFF1QB8Y/431DHUxCB65JOwo/S6gJ5QY9Jn9XK6OJQjzRAoGBAM6gaAuX7OGTfJTbhIrJo1gKTVDp8XtZ3Dn9q6zqIzZ1wgnKLycN5ddY66G2ejCzqV8lBmJbDzv0slR/pMMTZLTzb768HBDo+/uxuIlTNazPhqEwGbeRRkPdIUWucbu+NTBnDG5+wCD7rrOyBV95hYAohZugj3lRW85M288FXuqxAoGAP5lDgeR+K9XQeES+YTer0Uz7fmMJRU2zsEkJNWcTNst/YoBVGEGBxdSqjMdY3PlFklT43loxo0+xh/xD9/j9fooM/QPyAfRFLGd0nFLVytgcGUjRig1Uo9UoEWjwI8buRFDGcbCQBhBDq65lXRqbtla/Po/hqPaNAeXsIRP71IECgYEAxoOt8pV/7Ck6o/lTGdQnrsoXBgn9CzmGL+DbM0Gvmv7/8U/ihW8AxyiTGcarFmdF7jcwLwa1WDD7s9r+fL0BIChRz7oCbOyqS2KvnJ/pDaJEAlCoJIjaLREiikPS2UEg8OPQOchk5ktnyRTbvKKP9FT6KE7WCQR1Y3rMI9VRH8ECgYAwzKOxJao0QqQlYlmf/D7K1hZdT84TRCZnZ57ZviV+e/v01uOp0DpEBE+QKl1U6DhUhfDGatiexdpmrqYTQce4OvXQPh2h97jJNnkpowlJlzNAU1chOJwcToCfsbzGqFs7tlV7BV0OG1B7YFs1FDP/JIwq/UxaMm7/KAklZlV64A==',
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