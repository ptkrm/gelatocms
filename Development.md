# Development Version #

## Intructions ##

In order to access the Gelato's SVN repository on Google Code using [TortoiseSVN](http://tortoisesvn.sourceforge.net/) follow the bellow steps:

  * Make sure you've been added as a developer to the project on Google Code.
  * In Windows Explorer go to the folder you wish to check the code out into.
  * Right click and select the SVN Checkout command.
  * This will bring up a checkout dialog.
  * The url of the project's repository should be like this:

> https://gelatocms.googlecode.com/svn/trunk/

  * TortoiseSVN will prompt you for your Google Code username and password.
  * TortoiseSVN will retrieve the files from the repository and copy them to your local machine.
  * After you've finished you can modify the source code and after you've changed some files right click and select the **SVN → Commit…** command. Please make sure to enter an informative comment.
  * If you add new files to the project, you'll need to add it to Subversion and then commit it. To add a file, simply right click on it and select **TortoiseSVN → Add....**
  * Please do not forget before to work in any change you must select **SVN update...**, in order to avoid problems with changes from others team members.

## Anonymous SVN Access ##

If you want to access the source code on read mode, you can access to the SVN through anonymous way.

> svn checkout http://gelatocms.googlecode.com/svn/trunk/ gelatocms

## Web-based interface ##

If you only want to view into the current status of Gelato's code you can browse the SVN tree using the [SVN web-based interface](http://gelatocms.googlecode.com/svn/).