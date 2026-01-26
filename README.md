# simple-form-objects
[![Build Status](https://api.travis-ci.com/jimmy4fingers/simple-form-objects.svg?branch=master)](https://travis-ci.com/jimmy4fingers/simple-form-objects)

A lightweight PHP HTML decorator that allows you to create HTML elements as objects.

## Problem
In legacy PHP applications, generating forms and markup is often done with hard-coded HTML, making it repetitive, error-prone, and difficult to reuse. Dynamically generating forms (for example from database schemas) requires mixing logic and markup in messy ways.

## What it does
This package provides simple PHP objects that represent HTML elements, allowing markup to be composed programmatically. When combined with a MySQL table description or schema, it can be used to automatically generate input forms, CRUD interfaces, and other dynamic HTML structures in a clean and reusable way.
