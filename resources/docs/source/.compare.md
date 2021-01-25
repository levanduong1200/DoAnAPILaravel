---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#categories


<!-- START_db20564ba266cd451caac114b3eac8ab -->
## index

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/category" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/category"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/category`


<!-- END_db20564ba266cd451caac114b3eac8ab -->

<!-- START_10ee6e46975f0dbd3a6a0a4c3dbc9fc4 -->
## show

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/category/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/category/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/category/{id}`


<!-- END_10ee6e46975f0dbd3a6a0a4c3dbc9fc4 -->

<!-- START_e9126c2d1d41d6166c8c8ce6110a5faf -->
## search

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/category/1/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/category/1/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/category/{id}/search`


<!-- END_e9126c2d1d41d6166c8c8ce6110a5faf -->

<!-- START_894ef06ce7a41cb47f9c434fcd778d9a -->
## store

> Example request:

```bash
curl -X POST \
    "http://localhost/api/category" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/category"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/category`


<!-- END_894ef06ce7a41cb47f9c434fcd778d9a -->

<!-- START_d9dfc7825b2d75293082aeacaa0c0aac -->
## update

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/category/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/category/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/category/{id}`


<!-- END_d9dfc7825b2d75293082aeacaa0c0aac -->

<!-- START_99bc857b434c735c34957789a6467e9d -->
## destroy

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/category/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/category/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/category/{id}`


<!-- END_99bc857b434c735c34957789a6467e9d -->

#customer


<!-- START_96ed66d9e6531df9b49e02d84ca5a619 -->
## index

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/customers" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/customers"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/customers`


<!-- END_96ed66d9e6531df9b49e02d84ca5a619 -->

<!-- START_df0ee2ad0f05a9ea850f32c99b9ae55b -->
## show

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/customers/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/customers/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/customers/{id}`


<!-- END_df0ee2ad0f05a9ea850f32c99b9ae55b -->

<!-- START_5b615aaba4a763e8f14065bb9fe3cf92 -->
## store

> Example request:

```bash
curl -X POST \
    "http://localhost/api/customers/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/customers/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/customers/create`


<!-- END_5b615aaba4a763e8f14065bb9fe3cf92 -->

<!-- START_f4151a80b5de038553502f00df94e2a9 -->
## update

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/customers/update/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/customers/update/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/customers/update/{id}`


<!-- END_f4151a80b5de038553502f00df94e2a9 -->

<!-- START_9bee9b7257da7307fce0ed04bda9ad09 -->
## destroy

> Example request:

```bash
curl -X POST \
    "http://localhost/api/customers/delete/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/customers/delete/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/customers/delete/{id}`


<!-- END_9bee9b7257da7307fce0ed04bda9ad09 -->

#general


<!-- START_a925a8d22b3615f12fca79456d286859 -->
## api/auth/login
> Example request:

```bash
curl -X POST \
    "http://localhost/api/auth/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/auth/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/auth/login`


<!-- END_a925a8d22b3615f12fca79456d286859 -->

<!-- START_19ff1b6f8ce19d3c444e9b518e8f7160 -->
## api/auth/logout
> Example request:

```bash
curl -X POST \
    "http://localhost/api/auth/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/auth/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/auth/logout`


<!-- END_19ff1b6f8ce19d3c444e9b518e8f7160 -->

<!-- START_2e1c96dcffcfe7e0eb58d6408f1d619e -->
## api/auth/register
> Example request:

```bash
curl -X POST \
    "http://localhost/api/auth/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/auth/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/auth/register`


<!-- END_2e1c96dcffcfe7e0eb58d6408f1d619e -->

<!-- START_a47210337df3b4ba0df697c115ba0c1e -->
## api/auth/me
> Example request:

```bash
curl -X POST \
    "http://localhost/api/auth/me" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/auth/me"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/auth/me`


<!-- END_a47210337df3b4ba0df697c115ba0c1e -->

<!-- START_125b926d66967580c12e064d7a11f892 -->
## dat-hang
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dat-hang" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dat-hang"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET dat-hang`


<!-- END_125b926d66967580c12e064d7a11f892 -->

<!-- START_53be1e9e10a08458929a2e0ea70ddb86 -->
## /
> Example request:

```bash
curl -X GET \
    -G "http://localhost/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET /`


<!-- END_53be1e9e10a08458929a2e0ea70ddb86 -->

<!-- START_cdf705bfd48469f32a45e01d9ba61460 -->
## all-product
> Example request:

```bash
curl -X GET \
    -G "http://localhost/all-product" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/all-product"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET all-product`


<!-- END_cdf705bfd48469f32a45e01d9ba61460 -->

<!-- START_e99bafc4575d118e898544e05260f60b -->
## dangxuat
> Example request:

```bash
curl -X POST \
    "http://localhost/dangxuat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dangxuat"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST dangxuat`


<!-- END_e99bafc4575d118e898544e05260f60b -->

<!-- START_46160b3cdd58a8442cc1138dd06d4dbc -->
## dat-hang
> Example request:

```bash
curl -X POST \
    "http://localhost/dat-hang" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dat-hang"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST dat-hang`


<!-- END_46160b3cdd58a8442cc1138dd06d4dbc -->

<!-- START_5a0a51b87b60f6202fd30791659e9862 -->
## dathang-thanhcong
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dathang-thanhcong" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dathang-thanhcong"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET dathang-thanhcong`


<!-- END_5a0a51b87b60f6202fd30791659e9862 -->

<!-- START_c0f505b72e10817948e65eb5eb744708 -->
## search
> Example request:

```bash
curl -X GET \
    -G "http://localhost/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET search`


<!-- END_c0f505b72e10817948e65eb5eb744708 -->

<!-- START_1c1012bd2e14eb27509e3e503b93dda1 -->
## {slug}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET {slug}`


<!-- END_1c1012bd2e14eb27509e3e503b93dda1 -->

<!-- START_e40bc60a458a9740730202aaec04f818 -->
## admin
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin`


<!-- END_e40bc60a458a9740730202aaec04f818 -->

<!-- START_b37225c1c4a9d4a9e253fecd543b79a0 -->
## admin/logout
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/logout`


<!-- END_b37225c1c4a9d4a9e253fecd543b79a0 -->

<!-- START_95ad5186be6fd7070506d30dd997213d -->
## admin/admin
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/admin" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/admin"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/admin`


<!-- END_95ad5186be6fd7070506d30dd997213d -->

<!-- START_d1e9e1b95a199a4980bd4525fd0f38e3 -->
## admin/category
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/category" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/category"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/category`


<!-- END_d1e9e1b95a199a4980bd4525fd0f38e3 -->

<!-- START_4c15968abacedf0b67c4df455fdb7052 -->
## admin/category/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/category/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/category/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/category/create`


<!-- END_4c15968abacedf0b67c4df455fdb7052 -->

<!-- START_d44c2e0e5b3b0d2f011efe57f2d0495f -->
## admin/category
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/category" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/category"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/category`


<!-- END_d44c2e0e5b3b0d2f011efe57f2d0495f -->

<!-- START_00d0fda4f2720a4ae5a8466de7b9633f -->
## admin/category/{category}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/category/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/category/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/category/{category}`


<!-- END_00d0fda4f2720a4ae5a8466de7b9633f -->

<!-- START_10a24666bb303950e581fd3d009c6f4a -->
## admin/category/{category}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/category/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/category/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/category/{category}/edit`


<!-- END_10a24666bb303950e581fd3d009c6f4a -->

<!-- START_a6f8c8beca11e2374520f9fd7baf33d9 -->
## admin/category/{category}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/category/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/category/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/category/{category}`

`PATCH admin/category/{category}`


<!-- END_a6f8c8beca11e2374520f9fd7baf33d9 -->

<!-- START_7058a7e98365361d454ac97d3d5a839c -->
## admin/category/{category}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/category/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/category/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/category/{category}`


<!-- END_7058a7e98365361d454ac97d3d5a839c -->

<!-- START_9a7c60de622aa327ea2ab22f57fe4f40 -->
## admin/product
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/product" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/product`


<!-- END_9a7c60de622aa327ea2ab22f57fe4f40 -->

<!-- START_65d613717d414dff746ae77ab547d652 -->
## admin/product/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/product/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/product/create`


<!-- END_65d613717d414dff746ae77ab547d652 -->

<!-- START_2a50bdf6cd9fdfa165149d0dd0da7075 -->
## admin/product
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/product" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/product`


<!-- END_2a50bdf6cd9fdfa165149d0dd0da7075 -->

<!-- START_5929339dba9129dca1500c2f77f26fd0 -->
## admin/product/{product}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/product/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/product/{product}`


<!-- END_5929339dba9129dca1500c2f77f26fd0 -->

<!-- START_77545c4a80b5b616201d71ff305aec56 -->
## admin/product/{product}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/product/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/product/{product}/edit`


<!-- END_77545c4a80b5b616201d71ff305aec56 -->

<!-- START_4c44219e0cf932208c480684f68560cf -->
## admin/product/{product}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/product/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/product/{product}`

`PATCH admin/product/{product}`


<!-- END_4c44219e0cf932208c480684f68560cf -->

<!-- START_e518c6011493b2bc2658f74ea82e639d -->
## admin/product/{product}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/product/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/product/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/product/{product}`


<!-- END_e518c6011493b2bc2658f74ea82e639d -->

<!-- START_b590fce751d59baabcf5106c75a604f8 -->
## admin/account
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/account" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/account"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/account`


<!-- END_b590fce751d59baabcf5106c75a604f8 -->

<!-- START_0a8518427fea03d44ca950517f2606e5 -->
## admin/account/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/account/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/account/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/account/create`


<!-- END_0a8518427fea03d44ca950517f2606e5 -->

<!-- START_de9d2175d031ea3f9c29cd48d28d8104 -->
## admin/account
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/account" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/account"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/account`


<!-- END_de9d2175d031ea3f9c29cd48d28d8104 -->

<!-- START_f5b19fe19c19bef8ecc43aad3a9982d7 -->
## admin/account/{account}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/account/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/account/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/account/{account}`


<!-- END_f5b19fe19c19bef8ecc43aad3a9982d7 -->

<!-- START_8f442f6252c01a2f8a45ec610fb30ef9 -->
## admin/account/{account}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/account/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/account/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/account/{account}/edit`


<!-- END_8f442f6252c01a2f8a45ec610fb30ef9 -->

<!-- START_b3717d2ef8b7925a05f85cab74c1e744 -->
## admin/account/{account}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/account/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/account/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/account/{account}`

`PATCH admin/account/{account}`


<!-- END_b3717d2ef8b7925a05f85cab74c1e744 -->

<!-- START_82b2e9ec135ee6dd37dce0c8d49ee05f -->
## admin/account/{account}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/account/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/account/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/account/{account}`


<!-- END_82b2e9ec135ee6dd37dce0c8d49ee05f -->

<!-- START_bd487ab94d8034c2d13644bb1772fdfa -->
## admin/user
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/user`


<!-- END_bd487ab94d8034c2d13644bb1772fdfa -->

<!-- START_85482a73dd59bd3ef1adaab154cc5407 -->
## admin/user/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/user/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/user/create`


<!-- END_85482a73dd59bd3ef1adaab154cc5407 -->

<!-- START_71dba47ec1215d1147a3f8e59c55751a -->
## admin/user
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/user`


<!-- END_71dba47ec1215d1147a3f8e59c55751a -->

<!-- START_3b3de25d21f37e1748b345027c37ce73 -->
## admin/user/{user}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/user/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/user/{user}`


<!-- END_3b3de25d21f37e1748b345027c37ce73 -->

<!-- START_8dbd3c8dace74c8cc20dbdadc3a61eed -->
## admin/user/{user}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/user/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/user/{user}/edit`


<!-- END_8dbd3c8dace74c8cc20dbdadc3a61eed -->

<!-- START_7bc8a51548d7c6e9ac5bc7dda1263ba7 -->
## admin/user/{user}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/user/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/user/{user}`

`PATCH admin/user/{user}`


<!-- END_7bc8a51548d7c6e9ac5bc7dda1263ba7 -->

<!-- START_b8a25da15b804e04ecaa4bf05806041e -->
## admin/user/{user}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/user/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/user/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/user/{user}`


<!-- END_b8a25da15b804e04ecaa4bf05806041e -->

<!-- START_abed5cfa021d6e9a60379988984f2b8f -->
## admin/order
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/order" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/order`


<!-- END_abed5cfa021d6e9a60379988984f2b8f -->

<!-- START_d86e3837c0a461f75bbe06f785fb7494 -->
## admin/order/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/order/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/order/create`


<!-- END_d86e3837c0a461f75bbe06f785fb7494 -->

<!-- START_9f061547eaaed8143e1cfc71ecbc6ca4 -->
## admin/order
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/order" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/order`


<!-- END_9f061547eaaed8143e1cfc71ecbc6ca4 -->

<!-- START_1327948aada7da0d804cd56afdf4f867 -->
## admin/order/{order}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/order/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/order/{order}`


<!-- END_1327948aada7da0d804cd56afdf4f867 -->

<!-- START_31dd299fa914303f5459f36cd02d0c10 -->
## admin/order/{order}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/order/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/order/{order}/edit`


<!-- END_31dd299fa914303f5459f36cd02d0c10 -->

<!-- START_5605f2ba8af992829813a44e61432e0e -->
## admin/order/{order}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/order/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/order/{order}`

`PATCH admin/order/{order}`


<!-- END_5605f2ba8af992829813a44e61432e0e -->

<!-- START_8f95688953ee42fe64a5fc80d462fcfe -->
## admin/order/{order}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/order/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/order/{order}`


<!-- END_8f95688953ee42fe64a5fc80d462fcfe -->

<!-- START_3b5cdaeb4d67bfcb3d6a4d2fa2d4f314 -->
## admin/order_detail
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/order_detail" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order_detail"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/order_detail`


<!-- END_3b5cdaeb4d67bfcb3d6a4d2fa2d4f314 -->

<!-- START_db72f7d973d0632da6304bcb034e8a04 -->
## admin/order_detail/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/order_detail/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order_detail/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/order_detail/create`


<!-- END_db72f7d973d0632da6304bcb034e8a04 -->

<!-- START_7d95660db92c9f6179c490fe66125f2d -->
## admin/order_detail
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/order_detail" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order_detail"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/order_detail`


<!-- END_7d95660db92c9f6179c490fe66125f2d -->

<!-- START_219ccdae36ed2d6c1248166d18391760 -->
## admin/order_detail/{order_detail}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/order_detail/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order_detail/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/order_detail/{order_detail}`


<!-- END_219ccdae36ed2d6c1248166d18391760 -->

<!-- START_2dae25a249ee02ce67e30eaecd0de1e0 -->
## admin/order_detail/{order_detail}/edit
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/order_detail/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order_detail/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/order_detail/{order_detail}/edit`


<!-- END_2dae25a249ee02ce67e30eaecd0de1e0 -->

<!-- START_567ecadaa5ce86c42bb936e3619a3178 -->
## admin/order_detail/{order_detail}
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/order_detail/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order_detail/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/order_detail/{order_detail}`

`PATCH admin/order_detail/{order_detail}`


<!-- END_567ecadaa5ce86c42bb936e3619a3178 -->

<!-- START_6e90f69f34a6cb95a05bb82386554931 -->
## admin/order_detail/{order_detail}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/order_detail/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/order_detail/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/order_detail/{order_detail}`


<!-- END_6e90f69f34a6cb95a05bb82386554931 -->

<!-- START_8a59594ff635c00027a130968fc47527 -->
## admin/dashboard
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/dashboard" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/dashboard"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/dashboard`


<!-- END_8a59594ff635c00027a130968fc47527 -->

<!-- START_03a76d7b7a89853a08696bfe71bbbba7 -->
## admin/login
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET admin/login`


<!-- END_03a76d7b7a89853a08696bfe71bbbba7 -->

<!-- START_fe5fe3a14f04e5648848f1a59ea3da82 -->
## admin/login
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/login`


<!-- END_fe5fe3a14f04e5648848f1a59ea3da82 -->

<!-- START_2ec804687a0fbde7dc5d2905b30e0cf5 -->
## cart/view
> Example request:

```bash
curl -X GET \
    -G "http://localhost/cart/view" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/cart/view"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET cart/view`


<!-- END_2ec804687a0fbde7dc5d2905b30e0cf5 -->

<!-- START_c5a73784f55f8d3e0928b58a8ab87ff2 -->
## cart/add/{id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/cart/add/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/cart/add/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET cart/add/{id}`


<!-- END_c5a73784f55f8d3e0928b58a8ab87ff2 -->

<!-- START_f105f2491ffb90898dd64281d9db1ad0 -->
## cart/remove/{id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/cart/remove/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/cart/remove/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET cart/remove/{id}`


<!-- END_f105f2491ffb90898dd64281d9db1ad0 -->

<!-- START_b052a8b5895f0b2d91401a9c38f8e7f9 -->
## cart/update/{id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/cart/update/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/cart/update/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET cart/update/{id}`


<!-- END_b052a8b5895f0b2d91401a9c38f8e7f9 -->

<!-- START_da3c8e70bc0ff97b2dfbdf5a3afe9ee7 -->
## cart/clear
> Example request:

```bash
curl -X GET \
    -G "http://localhost/cart/clear" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/cart/clear"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET cart/clear`


<!-- END_da3c8e70bc0ff97b2dfbdf5a3afe9ee7 -->

<!-- START_c213fbad9a038d1c0859bf5112649569 -->
## unactive/{id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/unactive/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/unactive/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET unactive/{id}`


<!-- END_c213fbad9a038d1c0859bf5112649569 -->

<!-- START_b17221dfdebb54bbb0fb23f4f3e566a5 -->
## active/{id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/active/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/active/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET active/{id}`


<!-- END_b17221dfdebb54bbb0fb23f4f3e566a5 -->

<!-- START_84d1bde1f2737cc926e144a38e7efd3f -->
## sendemail
> Example request:

```bash
curl -X GET \
    -G "http://localhost/sendemail" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/sendemail"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET sendemail`


<!-- END_84d1bde1f2737cc926e144a38e7efd3f -->

#products


<!-- START_dc538d69a8586a7a3c36d4393cee42e6 -->
## index

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/product" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/product`


<!-- END_dc538d69a8586a7a3c36d4393cee42e6 -->

<!-- START_92097916400bd214580a78ae6b2a0855 -->
## show

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/product/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/product/{id}`


<!-- END_92097916400bd214580a78ae6b2a0855 -->

<!-- START_4589694420fc4d6fa65d06158bf2702e -->
## search

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/product/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/product/search`


<!-- END_4589694420fc4d6fa65d06158bf2702e -->

<!-- START_2d62ba7cf16a7d6db447375e13e86c34 -->
## store

> Example request:

```bash
curl -X POST \
    "http://localhost/api/product" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/product`


<!-- END_2d62ba7cf16a7d6db447375e13e86c34 -->

<!-- START_469fd283a01ebdb6b4556724ea329fd4 -->
## update

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/product/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/product/{id}`


<!-- END_469fd283a01ebdb6b4556724ea329fd4 -->

<!-- START_180d60b6481f5b1787ffcdb42da65460 -->
## destroy

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/product/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/product/{id}`


<!-- END_180d60b6481f5b1787ffcdb42da65460 -->


