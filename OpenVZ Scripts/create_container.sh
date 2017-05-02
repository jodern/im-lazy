#!/bin/sh
container_name=$1;
template_name=$2;

if [ -z "$template_name" ] 
then
template_name="centos-6-x86_64";
prlctl create "$container_name" --vmtype ct --ostemplate "$template_name"
prlctl set "$container_name" --netif_add eth0
else
prlctl create "$container_name" --ostemplate "$template_name"
fi
