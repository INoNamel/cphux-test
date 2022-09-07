## CPHUX Test assignment

I've spent the last week learning laravel+livewire+tailwind mostly from scratch as there was never a requirement or need to use the mentioned frameworks/libs.

Even though the task description does not specify exactly if CSV reader should store the data to be displayed right after the upload, I decided to use laravel-excel to first import the data to the local database so it can be accessed at a later point. The current basic implementation allows to choose an appropriate spreadsheet file and read through the cells using predetermined format. The data can then be displayed in a simple table view while Additional file imports would add extra rows to the DB). A dropdown menu consisting of existing "years of experience" distinct values can be used to filter the table accordingly.

As this is my first laravel experience I realised how much of extra complexity frameworks can add on top of a simple application which can be built using plain programming language and few libraries not to mention the difference between operating systems the frameworks were desgined for.

I would like to receive any feedback regarding my code structure, styling etc :)

