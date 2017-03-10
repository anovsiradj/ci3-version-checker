[November 2016]

Jadi begini, saya mencoba untuk mengunduh ci dari github
dengan menggunakan kode php (melalui api-nya).

Dari yang saya baca di manual github, bisa langsung melalui /latest,
tapi ternyata tidak bisa. Di repo ci, hanya ada rilis versi berupa tag.
Jadi Saya mencoba melakukannya dengan melalui /tags, dan berhasil
mendapatkan versi ci terbaru.

Pada akhirnya, kode ini tidak saya pakai.

# Contoh Output

```
3.1.2
stdClass Object
(
    [name] => 3.1.2
    [zipball_url] => https://api.github.com/repos/bcit-ci/CodeIgniter/zipball/3.1.2
    [tarball_url] => https://api.github.com/repos/bcit-ci/CodeIgniter/tarball/3.1.2
    [commit] => stdClass Object
        (
            [sha] => 2afa6b6b58a73fa26a7a93045ccb1fc8a087a141
            [url] => https://api.github.com/repos/bcit-ci/CodeIgniter/commits/2afa6b6b58a73fa26a7a93045ccb1fc8a087a141
        )

)
```
