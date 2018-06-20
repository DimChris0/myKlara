# myKlara
expanded functions on Kaspersky's [Klara](https://github.com/KasperskyLab/klara)

Instead of staying with the predefined repositories (paths) for scanning we
changed the functionality to be able to scan whatever path we want. There must
be though a repository_control.txt file in order for klara to start not only
scanning but for other actions as well.

NOTE: the database keeps allowed repositories for each user. For a given action
to start we have to fix this, giving all users maybe access to all repos or removing
the check from the corresponding file. This has also a downside because the server
has root privileges over the clients.

Now we also can do an 'ls' or 'dir' on any given path, if the repository_control
exists as well as MD5 of all files under a certain given path.
