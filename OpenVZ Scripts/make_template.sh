#!/bin/sh
container_name=$1;
template_name=$2;

prlctl clone \'$container_name\' --name \'$template_name\' --template

