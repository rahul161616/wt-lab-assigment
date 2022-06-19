Assignment 1 Getting the domain name<br>
Assignment 2 Adding pages to the Hosted website<br>
Assignment 3 Bird Watching<br>
![Screenshot](./birdwatching.jpg)
<br>
<br>
Assignment 4 Routine<br>
![Screenshot](./Routine.png)
<br>
<br>
Assignment 5 Z-index<br>
![Screenshot](./zindex.png)
[Z-index] (https://rahulsewa.live/z-index.html)
<br>
[Project Website] (https://rahulsewa.live)
<br>
[Drag and drop] (https://rahulsewa.live/Assignment%207/dragandrop.html)
<br>
<br>
<br>
<b>Creating Local Host - (Assignment 8[2022/6/19-20(7:00 AM)])</b>
</br>
   Step 1- Installation Of XAMPP(There are many btw..can be done using any)
   Step 2-
           (In xampp)<br>
           {
            <br>
              (In htdocs)
              <br>
              {
                <br>
                create 2 folders
                <br>
                1)hello (inside hello index.php)
                <br>
                1)second (inside second index.php)
                <br>
              }
              <br>
           } 
           <br>
        

   Step 2- In xampp {
    <br>
            (In apache){
                <br>
               (In conf)
               <br> 
               {
                <br>
                (In extra){
                    <br>
                   In httpd-vhosts-
                    <br>
                    <VirtualHost *:80>
                     DocumentRoot "C:\xampp\htdocs\github\wt-git-assignment\Assignment\Assignment 8\hello"
                     ServerName hello.local
                    </VirtualHost>  

                    <VirtualHost *:80>
                     DocumentRoot "C:\xampp\htdocs\github\wt-git-assignment\Assignment\Assignment 8\hello"
                     ServerName second.local
                    </VirtualHost> 
                }
               }
            } 
   Step 3-
   { 
    <br>
     (In C drive)<br>
      {<br>
        (In Windows)<br>
          {<br>
            (System 32)<br>
              {<br>
                drivers -<br>
                etc -<br>
                hosts-<br>
                127.0.0.1    hello.local<br>
                127.0.0.1    second.local<br>
             }<br>
          }<br>
        }<br>
      }<br>
    }<br>
Step 4-
        Open XAMPP<br>
        Start apache server<br>
        Goto browser<br>
        type<br>
        http://hello.local<br>
        http://second.local<br>

<br>

Apache Server-
Apache Xampp is an open source tool used for running PHP or PERL Web applications locally using a Web server. It is available for all major operating systems and is popular with Windows users to locally build and test their Web apps. In this tutorial, we will explore how to get started with Xampp. In the process, we shall create and run our own Web application in PHP, and use MySQL databases with the help of the PHPMyAdmin tool.

Xampp is a free and open source cross-platform Web server solution stack package developed by Apache Friends. It comes loaded with an Apache HTTP server, MariaDB, and MySQL. It also has interpreters for the programming languages PHP and PERL. Xampp is one of the most popular solutions for running PHP apps locally on Windows. Pronounced as Shamp, it is an abbreviation for ‘cross-platform MySQL PHP and Perl’.



