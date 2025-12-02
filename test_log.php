<?php
// Fungsi sederhana untuk menulis log
function writeLog($level, $message, $context = []) {
    $timestamp = date('Y-m-d H:i:s');
    $contextStr = !empty($context) ? json_encode($context) : '';
    // Format log: [Waktu] [Level] Pesan DataTambahan
    $logEntry = "[$timestamp] [$level] $message $contextStr" . PHP_EOL;
    
    // Simpan ke file app.log di dalam container
    file_put_contents('/var/www/html/app.log', $logEntry, FILE_APPEND | LOCK_EX);
}

// Catat bahwa halaman ini sedang dibuka
writeLog('INFO', 'Halaman Test Log Diakses!', [
    'ip' => $_SERVER['REMOTE_ADDR'] ?? 'unknown',
    'browser' => $_SERVER['HTTP_USER_AGENT'] ?? 'unknown'
]);

echo "✅ Log berhasil ditulis! Coba cek file app.log di dalam container.";
?>
