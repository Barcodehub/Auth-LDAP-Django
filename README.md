# Django LDAP Authentication

Este proyecto es una aplicación Django que utiliza autenticación LDAP para gestionar usuarios. Permite a los usuarios autenticarse utilizando un directorio LDAP, lo que facilita la integración con sistemas existentes de gestión de usuarios.

## Características

- **Autenticación LDAP**: Permite a los usuarios iniciar sesión utilizando credenciales almacenadas en un servidor LDAP.
- **Gestión de permisos**: Soporta roles de usuario mediante grupos en LDAP.
- **Interfaz de administración**: Integra un panel de administración de Django para gestionar datos.

## Build and Run the Project
   ```bash
docker-compose up --build
   ```

## Services

Web Application: ```http://localhost:8000```

PHPLDAPAdmin: ```http://localhost:8080```


## Default LDAP User

Username: jdoe

Password: 123456789

## LDAP Configuration (settings.py)
The project uses the following LDAP configuration:

Domain: ```example.com```

Admin DN: ```cn=admin,dc=example,dc=com```

Admin Password: ```admin123```

## User Groups

```active```: Active users

```staff```: Staff members

```superuser```: Administrators

```enabled```: Enabled users

## Accessing Admin Panel

Navigate to ```http://localhost:8000/admin/```

Log in with the LDAP user credentials


## Customization
Modify ```base.ldif``` to add more users and groups.

Update ```settings.py``` to adjust LDAP authentication parameters.
