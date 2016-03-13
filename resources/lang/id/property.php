<?php

return [
    'for' => [
        'sell' => 'Jual',
        'rent' => 'Sewa',
        'sell_property_title' => ':name dijual',
        'rent_property_title' => ':name disewakan',
        'both_property_title' => ':name dijual/disewakan',
        'neither_property_title' => ':name tidak dijual/disewakan',
    ],
    'status' => [
        'active' => 'Aktif',
        'inactive' => 'Tidak Aktif',
        'blocked' => 'Terblokir',
        'draft' => 'Tahap Edit',
        'review' => 'Pemeriksaan Admin',
    ],
    'rent_price_type' => [
        'yearly' => 'Tahunan',
        'monthly' => 'Bulanan',
    ],
    'viewing_schedule_option' => [
        'weekdays' => 'Hari Kerja',
        'weekend' => 'Akhir Pekan',
        'viewable_weekdays_text' => 'Kunjungan hanya di hari kerja',
        'viewable_weekend_text' => 'Kunjungan hanya di akhir pekan',
    ],
    'parking' => [
        'garage' => 'Garasi',
        'private' => 'Parkir Pribadi',
        'street' => 'Parkir di Jalan',
    ],
    'furnishing' => [
        'furnished' => 'Perabotan lengkap (Furnished)',
        'part_furnished' => 'Perabotan tidak lengkap (Semi Furnished)',
        'unfurnished' => 'Tidak ada perabotan (Unfurnished)',
    ],
    'certificate' => [
        'strata_title' => 'Strata Title',
        'hgb' => 'Hak Guna Bangunan',
        'hm' => 'Hak Milik'
    ],
    'create' => [
        'page_title' => 'Detail Utama',
        'body_copy' => 'Informasikan properti anda.',
        'list_detail_section_title' => 'Detail Properti',
        'list_detail_section_copy' => 'Silahkan isi formulir di bawah dengan informasi mengenai properti anda',
        'preview_property' => 'Lihat Properti',
        'disable_property' => 'Non-aktifkan Properti',
    ],
    'main_details' => [
        'page_title' => 'Informasi lengkap <span>:title<span>',
        'page_subtitle' => 'Deskripsikan properti anda',
        'body_copy' => 'Isi informasi mengenai properti anda secara lengkap agar properti anda mudah dipahami dan dicari.',
        'short_description_hint' => 'Masukkan fitur inti dari properti anda dalam beberapa baris.',
        'virtual_tour_hint' => 'Masukkan alamat untuk melihat video virtual tour properti anda.'
    ],
    'map' => [
        'page_title' => 'Peta <span>:title<span>',
        'body_copy' => 'Apabila bendera tidak sesuai, silahkan tarik peta agar bendera menunjukkan lokasi properti anda.',
        'search_map' => 'Cari peta',
        'point_map_question' => 'Pilih lokasi properti anda di Google Map.'
    ],
    'photos' => [
        'page_title' => 'Gambar <span>:title<span>',
        'body_copy' => '<p>Gambar akan membuat properti anda lebih menarik. Anda dapat memasukkan lebih dari satu gambar.</p>
						<p>Apabila anda memilih jasa Fotografi Profesional kami, anda dapat melewati halaman ini.</p>',
        'upload_photos_title' => 'Upload Gambar(Disarankan dengan format Landscape)',
        'upload_photos_hint' => 'Anda dapat upload lebih dari satu gambar. (Max: 5MB)',
        'choose_photos' => 'Pilih Gambar',
        'uploaded_photos_title' => 'Gambar Properti Anda'
    ],
    'floorplans' => [
        'page_title' => 'Denah Bangunan <span>:title<span>',
        'body_copy' => 'Apabila anda tidak mempunyai denah, kami dapat membuatnya untuk anda.',
        'upload_photos_title' => 'Upload Denah Bangunan',
        'upload_photos_hint' => 'Anda dapat upload lebih dari satu denah bangunan (Max: 2MB)',
        'choose_floorplans' => 'Pilih Denah Bangunan',
        'uploaded_floorplans_title' => 'Denah Bangunan Anda'
    ],
    'packages' => [
        'page_title' => 'Pilih paket <span>:title<span>',
        'body_copy' => 'Pilih paket untuk properti anda. Mohon diingat bahwa properti anda akan melewati proses verifikasi dalam beberapa hari ke depan sebelum kami tayangkan.',
    ],
    'packages_edit' => [
        'page_title' => 'Pilihan paket <span>:title<span>',
        'body_copy' => 'Untuk merubah paket anda, mohon hubungi kami.',
    ],
    'property_type' => [
        'house' => 'Rumah',
        'apartment' => 'Apartemen',
        'shophouse' => 'Ruko',
        'commercial' => 'Komersil',
        'factory' => 'Pabrik',
        'land' => 'Tanah',
        'villa' => 'Villa',
        'warehouse' => 'Gudang',
        'working-space' => 'Ruangan Kerja',
    ],
    'orientation' => [
        'north' => 'Utara',
        'north_east' => 'Timur Laut',
        'east' => 'Timur',
        'south_east' => 'Tenggara',
        'south' => 'Selatan',
        'south_west' => 'Barat Daya',
        'west' => 'Barat',
        'north_west' => 'Barat Laut',
    ],
    'messages' => [
        'save_successful' => 'Informasi anda berhasil tersimpan.',
        'attachment_invalid_property' => 'Gambar anda tidak sesuai ketentuan.',
        'photo_delete_successful' => 'Gambar berhasil dihapus.',
        'floorplan_delete_successful' => 'Denah berhasi dihapus.',
        'photo_rotate_successful' => 'Gambar berhasil diputar.',
        'unpublished' => 'Properti telah di non-aktifkan.',
        'published' => 'Properti telah diaktifkan.',
        'publish_failed' => 'Proses untuk aktivasi properti gagal.',
        'unauthorized_access' => 'Anda tidak dapat mengakses halaman ini.'
    ],
    'steps' => [
        'main_details' => 'Detail Utama',
        'property_details' => 'Detail Properti',
        'map' => 'Peta',
        'photos' => 'Gambar',
        'floorplan' => 'Denah',
        'packages' => 'Paket',
    ],
    'package' => [
        'sign_up_btn' => 'Daftar',
        'submit_btn' => 'Kirim',
        'min_fee' => 'biaya minimum sebesar IDR. 5,000,000',
        'save_calculation' => 'nilai properti x 2.5% (komisi agent tradisional) - (harga properti x komisi GoProp) + harga di muka',
        'category' => [
            'sell' => 'Menjual Properti',
            'rent' => 'Menyewakan Properti',
            'sell_label' => 'Jual',
            'rent_label' => 'Sewa',
        ],
        'sell_package' => 'Pilih paket Jual',
        'rent_package' => 'Pilih paket Sewa',
        'feature' => [
            'value' => 'Nilai Properti',
            'projection-fee' => 'Biaya perkiraan setelah selesai',
            'you-can-save' => 'Anda dapat menghemat',
            'up-front-fees' => 'Total biaya di muka',
            'sell-fee' => 'Biaya kami: anda hanya membayar ketika properti anda terjual',
            'sell-fee-notes' => '* Di atas / di bawah (3,000,000,000)',
            'rent-fee' => 'Biaya kami: anda hanya membayar ketika properti anda tersewa',
            'rent-fee-notes' => '',
            'property-verification' => 'Kunjungan agen GoProp untuk verifikasi properti',
            'exclusive-agency-contract' => 'Kontrak agent Eksklusif selama 4 bulan',
            'legal-setup' => 'Persiapan dokumen hukum',
            'full-sales-progression' => 'Perkembangan proses jual/sewa',
            'viewing-management' => 'Manajemen kunjungan',
            'viewing-feedback' => 'Tanggapan kunjungan',
            'offer-negotiation' => 'Negosiasi penawaran',
            'senior-agent' => 'Penanganan oleh agen senior',
            'internal-advertising' => 'Iklan di homepage GoProp',
            'search-rank-priority' => 'Hasil pencarian prioritas',
            'property-consultation' => 'Konsultasi dengan agen GoProp',
            'major-property-advertising' => 'Iklan di portal properti terbesar',
            'major-property-advertising-advanced' => 'Iklan di portal properti terbesar dengan fitur premium',
            'for-sale-board' => 'Papan dijual',
            'professional-floor-plan' => 'Denah bangunan profesional',
            'professional-photography' => 'Fotografi profesional',
            'professional-virtual-tour' => 'Tur virtual profesional',
            'for-rent-board' => 'Papan disewa',
        ]
    ],
    'order_review' => [
        'page_title' => 'Rekap Properti',
        'your_package' => 'Pilihan paket',
        'addons' => 'Tambahan',
        'total_cost' => 'Total Biaya',
        'upfront_fee' => 'Total biaya di muka',
        'agent_commission' => 'Komisi agen setelah selesai',
        'payment_methods' => 'Metode Pembayaran',
        'agree_tc' => 'Saya menyetujui',
        'terms_conditions' => 'syarat & ketentuan',
        'confirm_message' => 'Apakah anda ingin menyelesaikan proses ini?'
    ],
    'success' => [
        'page_title' => 'Pembelian paket selesai!',
        'body_copy' => 'Terima kasih telah memilih GoProp sebagai partner anda. Jangan khawatir, properti anda berada di tangan terbaik. Kami akan mengontak anda secepatnya untuk proses verifikasi dan informasi lanjutan. Jika anda memiliki pertanyaan, silahkan hubungi kami di :phone atau :email.'
    ],
    'index' => [
        'property_search' => 'Cari Properti',
        'im_looking_for' => 'Kategori',
        'title' => 'Properti',
        'price_range' => 'Jarak Harga',
        'for_sell_title' => 'Properti dijual',
        'for_rent_title' => 'Properti disewakan',
        'in_city' => 'di <strong>:location</strong>',
        'advanced_search' => 'Pencarian (:count)',
        'submit_property' => 'Upload Properti',
        'search_property' => 'Cari Properti',
        'search_filter' => 'Filter Pencarian',
        'bedrooms' => '[0,1] Kamar|[2,Inf] Kamar',
        'bathrooms' => '[0,1] Kamar Mandi|[2,Inf] Kamar Mandi',
        'type_keyword' => 'Masukkan kata kunci',
        'sort_by' => [
            'price_asc' => 'Harga Terendah',
            'price_desc' => 'Harga Tertinggi',
            'date_desc' => 'Terbaru',
            'date_asc' => 'Terlama',
        ]
    ],
    'view' => [
        'details' => 'Detail',
        'floorplans' => 'Denah Bangunan',
        'address' => 'Alamat',
        'set_draft_edit' => 'Non-aktifkan dan Ubah properti',
        'preview_edit' => 'Ubah properti',
        'preview_text' => 'Lihat',
        'virtual_tour' => 'Tur Virtual',
        'unpublish_confirm' => 'Langkah ini akan menonaktifkan properti. Apakah anda ingin lanjutkan?'
    ],
    'like' => [
        'like_message' => ':property_name sudah dimasukkan ke daftar suka.',
        'unlike_message' => ':property_name telah dihapus dari list yang anda suka.',
        'please_login' => 'Silahkan login untuk menyukai properti.',
        'own_property' => 'Anda tidak dapat memasukkan properti anda ke daftar suka.',
    ],
    'advanced_search_widget' => [
        'advanced_search' => 'Pencarian'
    ],
    'price_saving_widget' => [
        'estimated_property_price' => 'Estimasi harga jual properti',
        'adjust_price' => 'Geser untuk menyesuaikan harga',
        'you_save' => 'Anda hemat',
        'terms' => 'Ketika anda memilih GoProp.<br/>Berdasarkan komisi agen tradisional sebesar 2.5%.',
        'other_agent_term' => 'Ketika anda memilih agen tradisional',
        'other_agent_commission' => 'Komisi agen lain',
        'calculate_btn' => 'Hitung!',
        'or' => 'ATAU'

    ],
    'exclusive_property_widget' => [
        'title' => 'Properti Ekslusif',
    ],
    'my_properties' => [
        'property_i_sell' => 'Properti dijual',
        'property_i_lease' => 'Properti disewakan',
        'property_interested' => 'Properti disukai',
        'more_results' => 'Lihat semua'
    ],
    'schedule_viewing' => [
        'title' => 'Jadwalkan Kunjungan',
        'schedule_btn' => 'Jadwalkan',
        'label' => 'Waktu Kunjungan',
        'time' => [
            'afternoon' => 'Sore/Malam',
            'morning' => 'Pagi/Siang',
        ],
        'legends' => [
            'today' => 'Hari Ini',
            'scheduled_viewing' => 'Kunjungan ke properti saya',
            'property_i_view' => 'Properti yang saya kunjungi',
        ],
        'success_message' => 'Kami telah menerima permintaan kunjungan anda. Agen kami akan menghubungi anda.',
        'reschedule_success_message' => 'Kami telah menerima permintaan perubahan kunjungan anda. Agen kami akan menghubungi anda.'
    ],
    'property_comparison' => [
        'compare_properties' => 'Bandingkan Properti',
        'title' => 'Listing Properti',
        'add_message' => ':name telah ditambah ke perbandingan.',
        'remove_message' => ':name telah dihapus dari perbandingan.',
        'compare_btn' => 'Bandingkan',
        'tooltip_compare' => 'Tambahkan ke daftar perbandingan',
        'tooltip_uncompare' => 'Hapus dari daftar perbandingan',
    ],
    'inbox' => [
        'title' => 'Pesan Masuk',
        'your_properties' => 'Properti Anda',
        'send_message' => 'Kirim',
        'properties_interested' => 'Properti yang anda sukai',
        'please_select_property' => 'Silahkan pilih properti.',
        'please_add_message' => 'Tidak ada pesan. Anda dapat memulai pembicaraan dengan agen kami.',
        'conversation_started' => 'Dimulai pada :time',
        'no_result_message' => 'Anda belum menambah properti ke daftar suka.',
        'sent_message' => 'Pesan anda berhasil terkirim ke agen kami.',
        'property_questions' => 'Pertanyaan tentang Properti ini',
    ],
    'viewings' => [
        'title' => 'Kalendar Kunjungan',
        'view_of_my_property' => 'Kunjungan ke properti saya',
        'properties_i_view' => 'Properti yang saya kunjungi',
        'scheduled_label' => 'Jadwal kunjungan',
        'change_date' => 'Ubah Tanggal',
    ],
    'buttons' => [
        'talk_to_agent' => 'Bicara dengan agent kami',
        'schedule_viewing' => 'Jadwalkan Kunjungan',
        'new_property' => 'Upload Properti Baru',
        'edit_property' => 'Ubah Properti',
        'like' => 'Like',
        'unlike' => 'Unlike',
        'disable' => 'Non-aktifkan properti',
        'preview' => 'Lihat properti',
        'enable' => 'Aktifkan properti',
    ]
];