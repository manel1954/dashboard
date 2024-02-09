#!/bin/bash

echo "nombre de la sala: "
echo "$nombre_sala"
read a

sudo sed '1c $nombre_sala' /etc/dhcpcd.conf