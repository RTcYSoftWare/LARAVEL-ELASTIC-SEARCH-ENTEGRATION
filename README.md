
## ELASTIC SEARCH KURULUMU

- [GitHub Linki](https://github.com/babenkoivan/elastic-scout-driver-plus).
- GitHub Linki Adım Adım Takip edilerek oluşturulmuştur.
- Tüm bu işlemlerden önce bilgisayarınıza (MACOS veya WINDOWS) Elastic Search kurmanız gerekmektedir. Kurulumların ardından "CMD" komutları ile elsatic search'i başlatıp, çalışıp çalışmadığını kontrol ediniz.
- [Elastic Search Kurma Linki](https://www.youtube.com/watch?v=gS_nHTWZEJ8&list=PL_mJOmq4zsHZYAyK606y7wjQtC0aoE6Es&index=2&ab_channel=OfficialElasticCommunity).
- composer require laravel/scout.
- composer require babenkivo/elastic-scout-driver
- php artisan vendor:publish --provider="Laravel\Scout\ScoutServiceProvider" ;;;
    => config/scout.php => 'driver' => env('SCOUT_DRIVER', 'elastic')
- composer require babenkoivan/elastic-client
- php artisan vendor:publish --provider="ElasticClient\ServiceProvider" ;;;
    => config/elastic.client.php => 'hosts' => env('ELASTIC_HOST', 'localhost:9200')
- php artisan vendor:publish --provider="ElasticScoutDriver\ServiceProvider"
- composer require babenkoivan/elastic-scout-driver-plus
- composer update babenkoivan/elastic-scout-driver
- composer require babenkoivan/elastic-migrations
- php artisan migrate
- php artisan elastic:make:migration create_user_index ;;;   => migration içerisinde gerekli mapping işlemleri yapılır. 
- php artisan elastic:migrate
- Model (Burada User Modelinde yapılmıştır.) içerisinde Serachabbel trati eklenerek işlemler yapılır. Detaylı anlatım model içerisinde (User.php) mevcuttur.
- php artisan scout:import "App\Models\User" ;;; => Model içerisindeki kodlamaların ardından Kullanılan Model Sınıfı (Burda User Model'ini kullandık.) Elastic
Search'e aktarılmalıdır. Bu kodda bu işlemi yapar.
- Bu adımdan sonra artık kod üzerinde çalıştırmak kalıyor. Detaylı Anlatım Controller içerisinde bulunmaktadır.

## ÖNEMLİ NOT
PC RAM'İ HEM CMD HEM PHPSTORM VE HEM DE ARATMA İŞLEMİNDE PATLAMAKTADIR. DENENECEK BİLGİSAYARIN RAM KAPASİTESİ 8 GB VE ÜZERİ OLMALIDIR.
MÜMKÜNSE 8GB DA OLMASIN. ZİRA ARA SIRA SIKINTILAR ÇIKARMAKTADIR.

## GÖZ ATILABİLECEK YARDIMCI LİNKLER
- [GitHub Linki (Laravel Babenkoivan)](https://github.com/babenkoivan/elastic-scout-driver-plus).
- [Elastic Search Kurma Linki](https://www.youtube.com/watch?v=gS_nHTWZEJ8&list=PL_mJOmq4zsHZYAyK606y7wjQtC0aoE6Es&index=2&ab_channel=OfficialElasticCommunity).
- [GitHub Usage Linki](https://github.com/babenkoivan/elastic-scout-driver-plus#usage).
- [GitHub Search Parameters Linki](https://github.com/babenkoivan/elastic-scout-driver-plus#search-parameters).
- [GitHub Search Results Linki](https://github.com/babenkoivan/elastic-scout-driver-plus#search-results).
- [Youtube Video Serisi Linki](https://www.youtube.com/watch?v=gS_nHTWZEJ8&list=PL_mJOmq4zsHZYAyK606y7wjQtC0aoE6Es&index=4&ab_channel=OfficialElasticCommunity).
- [Lisa Hjung GitHub Linki](https://github.com/LisaHJung).
- [Part 1 Beginner's Crash Course to Elastic Stack Series Linki](https://github.com/LisaHJung/Part-1-Intro-to-Elasticsearch-and-Kibana).
- [Part 2 Beginner's Crash Course to Elastic Stack Series Linki](https://github.com/LisaHJung/Part-2-Understanding-the-relevance-of-your-search-with-Elasticsearch-and-Kibana-).
- [Part 3 Beginner's Crash Course to Elastic Stack Series Linki](https://github.com/LisaHJung/Part-3-Running-full-text-queries-and-combined-queries-with-Elasticsearch-and-Kibana).
- [Part 4 Beginner's Crash Course to Elastic Stack Series Linki](https://github.com/LisaHJung/Part-4-Running-Aggregations-with-Elasticsearch-and-Kibana).
- [Part 5 Beginner's Crash Course to Elastic Stack Series Linki](https://github.com/LisaHJung/Part-5-Understanding-Mapping-with-Elasticsearch-and-Kibana).
- [Part 6 Beginner's Crash Course to Elastic Stack Series Linki](https://github.com/LisaHJung/Part-6-Troubleshooting-Beginner-Level-Elasticsearch-Errors).
- [Elsatic Dev Tools Home Linki](https://beginner-s-crash-course-762109.kb.us-central1.gcp.cloud.es.io:9243/app/home#/).


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
