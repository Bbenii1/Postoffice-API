# Postoffice API dokumentáció

## Alapok

- Alapútvonal: `/api`
- Formátum: JSON
- Védett végpontok: Laravel Sanctum Bearer token
- Sikeres erőforrás-válaszok: JSON objektum vagy tömb
- Nem található erőforrás: Laravel `404 Not Found` válasz
- Hibás validáció: Laravel `422 Unprocessable Entity` válasz

Védett kérések fejlécében:

```http
Authorization: Bearer <token>
Accept: application/json
Content-Type: application/json
```

## Hitelesítés

### Bejelentkezés

```http
POST /api/users/login
```

Kérés:

```json
{
  "email": "user@example.com",
  "password": "secret"
}
```

Sikeres válasz: `200 OK`

```json
{
  "user": {
    "id": 1,
    "email": "user@example.com",
  },
  "token": "1|example-token"
}
```

Hibás hitelesítés: `401 Unauthorized`

```json
{
  "message": "Invalid email or password"
}
```

Validációs hiba: `422 Unprocessable Entity`.

## Felhasználók

### Bejelentkezett felhasználó

```http
GET /api/user
```

Auth: szükséges.

Válasz `200 OK`


```json
{
  "id": 1,
  "email": "user@example.com"
}
```

### Felhasználók listázása

```http
GET /api/users
```

Auth: szükséges.

Válasz: `200 OK`

```json
[
  {
    "id": 1,
    "email": "admin@admin.com"
  },
  {
    "id": 2,
    "email": "user@example.com"
  }
]
```

## Megyék

### Megyék listázása

```http
GET /api/counties
GET /api/counties?name=Baranya
GET /api/counties?search=Baranya
```

Auth: nem szükséges. A lista név szerint növekvő sorrendű. A válasz `cities_count` mezőben tartalmazza a városok számát.

Válasz: `200 OK`

```json
[
  {
    "id": 1,
    "name": "Baranya",
    "population": 365000,
    "logo_url": "https://example.com/baranya.svg",
    "cities_count": 12
  }
]
```

### Egy megye lekérése

```http
GET /api/counties/{id}
```

Auth: nem szükséges. A válasz a megye `cities` kapcsolatát is tartalmazza.

### Megye létrehozása

```http
POST /api/counties
```

Auth: szükséges.

Kérés:

```json
{
  "name": "Baranya",
  "population": 365000,
  "logo_url": "https://example.com/baranya.svg"
}
```

Mezők:

| Mező | Típus | Kötelező | Korlátozás |
| --- | --- | --- | --- |
| `name` | string | Igen | Maximum 255 karakter, egyedi |
| `population` | integer | Igen | Minimum 0 |
| `logo_url` | string | Nem | Érvényes URL, maximum 500 karakter |

Sikeres válasz: `201 Created`. A válasz tartalmazza a `cities_count` mezőt.

### Megye módosítása

```http
PATCH /api/counties/{id}
```

Auth: szükséges. Kérés mezői és válaszformátuma megegyezik a létrehozásnál leírtakkal. A mezők továbbra is kötelezők.

Sikeres válasz: `200 OK`.

### Megye törlése

```http
DELETE /api/counties/{id}
```

Auth: szükséges. A kapcsolódó városok adatbázis-kapcsolata kaszkádoltan törlődik.

Válasz: `200 OK`

```json
{
  "message": "County deleted successfully",
  "id": "1"
}
```

## Városok

### Városok listázása

```http
GET /api/cities
GET /api/cities?name=Pécs
GET /api/cities?search=Pécs
GET /api/cities?city_id=1
```

Auth: nem szükséges. A lista név szerint növekvő sorrendű, és minden elem tartalmazza a `county` kapcsolatot.

Válasz: `200 OK`

```json
[
  {
    "id": 1,
    "name": "Pécs",
    "county_id": 1,
    "population": 140000,
    "county": {
      "id": 1,
      "name": "Baranya",
      "population": 365000,
      "logo_url": null
    }
  }
]
```

### Egy város lekérése

```http
GET /api/cities/{id}
```

Auth: nem szükséges. A válasz a város `county` kapcsolatát is tartalmazza.

### Város létrehozása

```http
POST /api/cities
```

Auth: szükséges.

Kérés:

```json
{
  "name": "Pécs",
  "county_id": 1,
  "population": 140000
}
```

Mezők:

| Mező | Típus | Kötelező | Korlátozás |
| --- | --- | --- | --- |
| `name` | string | Igen | Maximum 255 karakter |
| `county_id` | integer | Igen | Létező megyeazonosító |
| `population` | integer | Nem | Minimum 0, alapérték: `0` |

Sikeres válasz: `201 Created`. A válasz tartalmazza a `county` mezőt.

### Város módosítása

```http
PATCH /api/cities/{id}
```

Auth: szükséges. Kérés mezői megegyeznek a létrehozásnál leírtakkal; `name` és `county_id` kötelező. Sikeres válasz: `200 OK`.

### Város törlése

```http
DELETE /api/cities/{id}
```

Auth: szükséges.

Válasz: `200 OK`

```json
{
  "message": "City deleted successfully",
  "id": "1"
}
```
