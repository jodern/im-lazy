#!/bin/sh
container_name=$1;
echo $container_name;

prlctl create \'$container_name\' --vmtype ct --ostampleate centos-6-x86_64
prlctl set \'$container_name\' --netif_add eth0
