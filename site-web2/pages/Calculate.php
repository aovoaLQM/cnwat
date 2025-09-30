<?php
// Calculate.php
$radius = 10;

function factorial($n) {
    $res = 1;
    for ($i = 2; $i <= $n; $i++) {
        $res *= $i;
    }
    return $res;
}

$fact10 = factorial(10);
$area_circle = pi() * $radius * $radius;              // πr^2
$volume_sphere = (4.0/3.0) * pi() * pow($radius, 3);  // 4/3 π r^3
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8" />
    <title>Calculate.php — Toán và Hello chuyển động</title>
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            padding: 24px;
            background: #f5f7fb;
            color: #222;
        }

        .card {
            background: #fff;
            border-radius: 8px;
            padding: 18px;
            box-shadow: 0 6px 18px rgba(20,20,40,0.06);
            max-width: 680px;
            margin: 18px auto;
        }

        h1 { margin-top: 0; font-size: 20px; }

        .result { margin: 12px 0; font-size: 16px; }

        .label { color: #555; }

        /* Khung cho chữ "Hello" chuyển động */
        .marquee-frame {
            position: relative;
            width: 100%;
            height: 60px;
            overflow: hidden;
            border-radius: 8px;
            background: linear-gradient(90deg,#eef2ff,#ffffff);
            display: flex;
            align-items: center;
            margin-top: 16px;
        }

        .moving {
            position: relative;
            white-space: nowrap;
            font-weight: 700;
            font-size: 28px;
            padding: 8px 12px;
            display: inline-block;
            /* animation: move horizontal */
            animation: moveX 6s linear infinite;
        }

        @keyframes moveX {
            0%   { transform: translateX(100%); }
            100% { transform: translateX(-100%); }
        }

        /* responsive */
        @media (max-width: 480px) {
            .moving { font-size: 20px; }
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Calculate.php — Kết quả tính toán</h1>

        <div class="result">
            <span class="label">Giai thừa của 10 (10!):</span>
            <strong><?php echo number_format($fact10, 0, '.', ','); ?></strong>
        </div>

        <div class="result">
            <span class="label">Diện tích hình tròn (r = <?php echo $radius; ?>):</span>
            <strong><?php echo number_format($area_circle, 4, '.', ','); ?> (đơn vị²)</strong>
            <div style="color:#666; font-size:13px; margin-top:6px;">
                (Công thức: π × r², π ≈ <?php echo round(pi(), 6); ?>)
            </div>
        </div>

        <div class="result">
            <span class="label">Thể tích khối cầu (r = <?php echo $radius; ?>):</span>
            <strong><?php echo number_format($volume_sphere, 4, '.', ','); ?> (đơn vị³)</strong>
            <div style="color:#666; font-size:13px; margin-top:6px;">
                (Công thức: 4/3 × π × r³)
            </div>
        </div>

        <div class="marquee-frame" aria-hidden="true">
            <div class="moving">Hello — Chào bạn! 👋</div>
        </div>


    </div>
</body>
</html>
