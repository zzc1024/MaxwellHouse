<?php
$config = array (	
		//应用ID,您的APPID。
		'app_id' => "2016091400508574",

		//商户私钥
		'merchant_private_key' => "MIIEpgIBAAKCAQEAxfW/xFcjrlUh3d6rPasEaN1mHUwvX24BO0/O0peQPu2nP5CMOtrlbhH7NEGUg27JvyPc3gw7/tEGExZaKJoLiZfnF8vMQX3qxsBmrmZ5M0XKDZoQj+Btt/RxjXfrs4LYz/Wnqlpv3ISvGHUkeyfVKA30YUBgeSZkS5w8D3yPA23m24nTjMmtZACsc1gpz4a9awGfRJtSrKLHVCQsAPr8wRVCajpT/NfL2ndyoEgvs1xST9g2ezKaEvTJEPzlQvrqZlBfwcLl6sMrVZtE+XKmNqeMWfX/yaPJpRzUj4W/jQqyDeNqc+KmGyHzf+rAlAJ/OiRECGbZabYbJoCIIHGX5QIDAQABAoIBAQCfhqu0AHjriwVQs5kRiBh0nT4mC/f9EjwB3Q2RnbwLSh7GVaj74NyUt/7UnKiexg/kbXUWp4tNjIo1pYSgRYtYpUYAYiZG/L7OzcuxbTjsfagXD/mayEQCwwUi+OnDboVkCNXFrT2J2o7zyarNaEsZDS3LlUJpPuwCFnQ8Eqd5HZJFUXbVEK4g+FGPR/XE4Fobs0T0e4zNeaee2jSclg6Yy4OLuliXKk+0XFe3HoC/FZMS+8my+oeFdcE316YyaRciBew2yGTGhnrHzdbaOY9eVkiNgms3GivlmzFmWK+kETQ/oywT/CtuiYRgvO22RVebpgT+aEPJBx/JixlmdX2hAoGBAPdbUO1N1ErhoMDC7F6ovaDi1K9cDt1jpaVv62kNHSk3i1z71eLKDKbU9sySRkNqaJyHi68xZ/hwpZp67q4owqfI5oA2QL0z9tBuhsLQewIwQiudhFPEW4AFpjwqmt33GGWqXQb8F2BSFmjOMP8cByAhFlZt9EawVs8XCsqpJEStAoGBAMzgkD8yLbgVxhgaGqKXFQtaVnSzfhvY/Wr8dsBUy2fddtDMyzt380fjwChRju0vCC8s3weaHqbjdxsXoQ3WTs1lq2Dcx6+V4khidwRKRCg9ffRE7ye2Fx3eE0Y16vG7tmTfinYuvUMMS/F8EwVyNWJrFkCvDpZOCgPHeS1Wu88ZAoGBALXjOQP2iheyB+IWs3b7v80RXvG/0NJs1r5rKQDrerj3Ngxexq1og5sd2IkfOnmSQnBvn4Bo5RojwzJwGRiJsnFsYkp/GmXGU0R7Ma8JXJqEX/PwdQCfz+S4wr9VWOHFM/R2LMfZEVtroTzZ+d9tfbPbgLB3U/uy6XKIcBAMBjZVAoGBAK4AGwJRL5skgvV9Vhm4jtrxgnPi7bvg8nmmqYR3f7la0cpL5F9BZJEt0MltWyH9y8mlJlZigp3imgmca+BAnvS64G6Hk+CAP4qSddpi6Lf0YcDPuv3THJb1QRFkQYHElwfdAs+UqpEDJIyXf+AkO0q3AFM3WgA1jzPeegATpbYhAoGBAIJfn8ApYrpoa7u+DdWF1O4gHImG0m62PwmOEbzyjzskgfFO7+eqE9Y59CSHgznADEtpNytAfLc8ALL5f2KvS8bfr3RUkhFSGDgBwRb0710W199fc5IlVmD+5ykjciWQxpXa6hSY2rN2KqfUBFd6hKkZlvBqWDHbVxKF4yucC1tL",
		
		//异步通知地址
		'notify_url' => "http://zhu1.51zuopin.com/app/notify_url.php",
		
		//同步跳转
		'return_url' => "http://zhu1.51zuopin.com/app/return_url.php",

		//编码格式
		'charset' => "UTF-8",

		//签名方式
		'sign_type'=>"RSA2",

		//支付宝网关
		'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",

		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAxfW/xFcjrlUh3d6rPasEaN1mHUwvX24BO0/O0peQPu2nP5CMOtrlbhH7NEGUg27JvyPc3gw7/tEGExZaKJoLiZfnF8vMQX3qxsBmrmZ5M0XKDZoQj+Btt/RxjXfrs4LYz/Wnqlpv3ISvGHUkeyfVKA30YUBgeSZkS5w8D3yPA23m24nTjMmtZACsc1gpz4a9awGfRJtSrKLHVCQsAPr8wRVCajpT/NfL2ndyoEgvs1xST9g2ezKaEvTJEPzlQvrqZlBfwcLl6sMrVZtE+XKmNqeMWfX/yaPJpRzUj4W/jQqyDeNqc+KmGyHzf+rAlAJ/OiRECGbZabYbJoCIIHGX5QIDAQAB",
);