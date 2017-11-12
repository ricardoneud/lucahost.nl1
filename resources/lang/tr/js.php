<?php

return [
    'common' => [
        'whoops' => 'Hata!',
        'error' => 'İşleminiz gerçekleştirilirken bir hata oluştu.',
        'offline' => 'Kapalı',
        'online' => 'Açık',
        'stopping' => 'Kapanıyor',
        'starting' => 'Açılıyor',
    ],
    '2fa' => [
        'submit' => 'Doğrula',
        'enabled' => 'Hesabınıza iki aşamalı doğrulama tanımlanmıştır. Sayfayı yenilemek için, aşağıdaki \'Kapat\' tuşuna basın.',
        'invalid_token' => 'Girilen doğrulama kodu geçersiz.',
        'error' => 'Hesaba iki aşamalı doğrulama tanımlamaya çalışırken hata oluştu.',
    ],
    'console' => [
        'cpu_label' => 'Kullanım Yüzdesi',
        'cpu_text' => 'İşlemci Kullanımı (birim: % [yüzde])',
        'memory_label' => 'RAM Kullanımı',
        'memory_text' => 'RAM Kullanımı (birim: MB [megabyte])',
    ],
    'file_editor' => [
        'create_empty' => 'Dosya adı girilmedi.',
        'create_message' => 'Dosya Oluşturuluyor',
        'create_button' => 'Yeni Dosya',
        'save_message' => 'Dosya Kaydediliyor',
        'save_success' => 'Dosya başarıyla kaydedildi.',
        'save_button' => 'Kaydet',
    ],
    'actions' => [
        'create_folder_title' => 'Klasör Oluştur',
        'create_folder_text' => 'Oluşturmak istediğiniz klasör adını ve dizini aşağıya girin.',
        'move_file_title' => 'Dosya Taşı',
        'move_file_text' => 'Dosyayı taşımak istediğiniz yeni dizini aşağıya girin.',
        'copy_file_title' => 'Dosya Kopyala',
        'copy_file_text' => 'Dosyanın bir kopyasını koymak istediğiniz dizini aşağıya yazın.',
        'copy_file_success' => 'Dosya başarıyla kopyalandı.',
        'delete_file_text1' => '',
        'delete_file_text2' => ' gerçekten silmek istediğinize emin misiniz? Bu işlemin geri dönüşü <strong>yoktur</strong>.',
        'delete_file_success' => 'Dosya(lar) Silindi',
        'delete_selected_select' => 'Lütfen silmek istediğin dosya veya klasörleri seçin.',
        'decompress_file_title' => 'Açılıyor...',
        'decompress_file_text' => 'Bu işlem bir kaç saniye sürebilir.',
    ],
    'contextmenu' => [
        'rename' => 'Yeniden Adlandır',
        'move' => 'Taşı',
        'copy' => 'Kopyala',
        'compress' => 'Sıkıştır',
        'decompress' => 'Sıkıştırmayı Aç',
        'new_file' => 'Yeni Dosya',
        'new_folder' => 'Yeni Klasör',
        'download' => 'İndir',
        'delete' => 'Sil',
    ],
    'upload' => [
        'in_progress' => 'Şu an sunucuya dosya yükleniyor, devam etmek istediğinden emin misin?',
        'error' => 'Dosya yüklemeye çalışırken hata oluştu',
    ],
    'server_socket' => [
        'connection_problem' => 'Sunucu bağlantısında problem oluştu. Panel çalışması gerektiği gibi çalışmayacaktır. Destek talebi ile bildirim yapabilirsiniz.',
    ],
    'serverlist' => [
        'error' => 'Hata',
        'installing' => 'Kuruluyor',
        'suspended' => 'Durduruldu',
    ],
    'task_view' => [
        'task_limit_reached_title' => 'Görev Limitine Ulaşıldı',
        'task_limit_reached_text' => 'En fazla 5 görev ekleyebilirsiniz.',
    ],
    'task_manage' => [
        'delete_title' => 'Görevi Sil?',
        'delete_text' => 'Görevi silmek istediğinize emin misiniz? Bu işlemin geri dönüşü yoktur.',
        'delete_button' => 'Görevi Sil',
        'delete_success' => 'Görev silindi.',
        'delete_fail' => 'Görevi silmeye çalışırken hata oluştu.',
        'toggle_title' => 'Görevin Durumunu Değiştir',
        'toggle_text' => 'Bu işlem, görevin durumunu değiştirir. Aktif ise devre dışı hale getirir, devre dışı ise aktifleştirir.',
        'toggle_button' => 'Devam',
        'toggle_success' => 'Görevin durumu değiştirildi.',
        'toggle_fail' => 'Görevin durumu değiştirilirken hata oluştu.',
    ],
];
