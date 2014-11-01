WAMP Setup Guide
========================================

Please follow the instructions below for those doing PHP for their projects to ensure that you have PHP and WAMP properly installed and configured. There is an issue with the UOIT laptop images which will required you to follow these instructions in order to get WAMP working properly on your machine.


1. Follow this guide on [installing PHP and WAMP server](http://tenfouragency.com/setting-up-a-wamp-local-server-on-windows-7/) to get PHP and WAMP installed and running on your machine. If you are installing WAMP on your UOIT laptop or have any issues getting the WAMP icon to show up in **green** PLEASE follow the next set of instructions.

2. Click the start menu and launch the windows services as follows: ![services](http://puu.sh/cxCq2/e6a6586c68.png)

3. Click on the world wide publishing service: ![wwps](http://puu.sh/cxCtp/cc8deb0bde.png)

4. Change the startup type to **disabled** and press the **stop** button to stop the service: ![stop service](http://puu.sh/cxCyr/0f72cea4d9.png)

5. Restart WAMP server, you should now see it light up in green:    
![wamp](http://puu.sh/cxDcX/2e43b15c85.png)

6. Go to **localhost** in your browser you should see the following page: ![localhost](http://puu.sh/cxDfm/2aefad2963.png)

7. If you are still having issues getting WAMP to start properly make sure to **EXIT SKYPE** and then try restarting WAMP server, for some reason it has issues starting if Skype is running.
