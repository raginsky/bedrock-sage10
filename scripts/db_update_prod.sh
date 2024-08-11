#!/bin/bash

docker exec -i mariadb mariadb -u root -proot wordpress < .db/db.sql
