# PHP-RapidREST-Mongo

Based on my other project, [PHP-RapidREST](https://github.com/AndrewNatoli/PHP-RapidREST), this is a [Lumen](https://lumen.laravel.com/)-based version that uses MongoDB.

## What's this for?

Rapid frontend prototyping. If you need to test a frontend without waiting on the backend or you want to build a
personal project you need a database for and aren't concerned about security or performance (ex. you're building a
disposable learning project) then this is for you!

TL;DR: Instant API! Just don't use this in production.

### More disclaimers

I'm not a Mongo expert... yet ;)

I originally built this as a learning project as well as a utility for some random offline projects I make and need to
store data for. 

This works exactly how _I_ want it to. There are some "issues" you may come across and you're more than welcome to submit a pull request for them. :)

## How do I get started?

### The easy way

You need [Virtualbox](https://www.virtualbox.org/), [Vagrant](https://www.vagrantup.com/)Vagrant, and [Ansible](http://docs.ansible.com/ansible/intro_installation.html) on your machine.

You should also install the [vagrant-hostsupdater](https://github.com/cogitatio/vagrant-hostsupdater) plugin with `vagrant plugin install vagrant-hostsupdater`.

Clone this repo, navigate to its directory in a terminal and run `vagrant up`.

Wait a few minutes for the provisioning script to do, then access `http://mongoapi.dev/`!

#### What did that do?

When you run `vagrant up` it creates a Virtual Machine on your computer running Ubuntu Linux. Then, Ansible runs which follows
the instructions in the "playbook" I made in order to set up PHP and MongoDB automagically.

### The "less easy" way

Wait, you're taking the _less easy_ route? Isn't this supposed to be rapid? Oh well.

Make sure you have an environment set up with PHP >= 5.6, MongoDB, PHP's MongoDB extension, and [anything else Lumen requires](https://lumen.laravel.com/docs/5.4#server-requirements).

Point your web server's document root to the `rapidrest/public` directory.

If you're familiar with Ansible you can also re-purpose my playbook in the `vagrant-ansible` directory. ;)

## How to use it?

Grab a REST client like [Insomnia](https://insomnia.rest/), build your own frontend, or run `curl` via command line like a boss.

All write operations (POST and PUT) expect JSON as the request body. If you're looking to submit form data
you should probably check out the original [PHP-RapidREST](https://github.com/AndrewNatoli/PHP-RapidREST) which supports MySQL and SQLite instead.

### GET /{collection}

Returns all documents in a collection. _All of them_. Add pagination and submit a pull request if that's too horrifying of a thought. 

### GET /{collection}/{id}

Returns a document by its `_id`

### POST /{collection}

Add a document to the specified collection

### PUT /{collection}/{id}

Updates the document with the corresponding `_id` document in the collection.

**Known issue**: This currently returns true every time (unless you cause an exception to be thrown).

### DELETE /{collection}/{id}

Delete a document from the collection by its `_id`.

## Contributing

Do it! Submit a pull request! Add pagination or something else that would make this more useful!