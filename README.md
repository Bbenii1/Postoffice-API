

### Használható végpontok

| Metódus | Végpont | Auth | Leírás |
| --- | --- | --- | --- |
| `POST` | `/api/users/login` | Nem | Bejelentkezés, token generálása |
| `GET` | `/api/user` | Igen | Bejelentkezett felhasználó lekérése |
| `GET` | `/api/users` | Igen | Felhasználók listázása |
| `GET` | `/api/counties` | Nem | Megyék listázása, opcionális név szerinti kereséssel |
| `GET` | `/api/counties/{id}` | Nem | Egy megye lekérése városokkal |
| `POST` | `/api/counties` | Igen | Megye létrehozása |
| `PATCH` | `/api/counties/{id}` | Igen | Megye módosítása |
| `DELETE` | `/api/counties/{id}` | Igen | Megye törlése |
| `GET` | `/api/cities` | Nem | Városok listázása, kereséssel és azonosító szerinti szűréssel |
| `GET` | `/api/cities/{id}` | Nem | Egy város lekérése megyével |
| `POST` | `/api/cities` | Igen | Város létrehozása |
| `PATCH` | `/api/cities/{id}` | Igen | Város módosítása |
| `DELETE` | `/api/cities/{id}` | Igen | Város törlése |

Részletes leírás, paraméterek, példakérések és válaszok: [APIDOC.md](APIDOC.md).