<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="wrap clearfix">

        <?php do_shortcode( '[responsive_slider]' ); ?>

<!--
			    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

				    <header class="article-header">

					    <h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

					    <p class="byline vcard"><?php _e('Posted', 'bonestheme'); ?> <time class="updated" datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time(get_option('date_format')); ?></time>
						    <?php _e('by', 'bonestheme'); ?> <span class="author"><?php the_author_posts_link(); ?></span> <span class="amp">&</span> <?php _e('filed under', 'bonestheme'); ?> <?php the_category(', '); ?>
						  </p>

				    </header>

				    <section class="entry-content clearfix">
					    <?php the_content(); ?>
				    </section>

				    <footer class="article-footer">

							<p class="tags"><?php the_tags('<span class="tags-title">Tags:</span> ', ', ', ''); ?></p>

				    </footer>

				    <?php // comments_template(); // uncomment if you want to use them ?>

			    </article>

			    <?php endwhile; ?>

			        <?php if (function_exists('bones_page_navi')) { ?>
			            <?php bones_page_navi(); ?>
			        <?php } else { ?>
			            <nav class="wp-prev-next">
			                <ul class="clearfix">
			        	        <li class="prev-link"><?php next_posts_link(_e('&laquo; Older Entries', "bonestheme")) ?></li>
			        	        <li class="next-link"><?php previous_posts_link(_e('Newer Entries &raquo;', "bonestheme")) ?></li>
			                </ul>
			            </nav>
			        <?php } ?>

			    <?php else : ?>

			        <article id="post-not-found" class="hentry clearfix">
			            <header class="article-header">
			        	    <h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
			        	</header>
			            <section class="entry-content">
			        	    <p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
			        	</section>
			        	<footer class="article-footer">
			        	    <p><?php _e("This is the error message in the index.php template.", "bonestheme"); ?></p>
			        	</footer>
			        </article>

			    <?php endif; ?>

-->

		    <div id="main" class="fourcol first clearfix">
		    	<h2>Announcements</h2>
		    	<?php if (function_exists (news_announcement)) news_announcement(); ?>
		    </div>

		    leaner? What is it for?
Mailcleaner is a utility for filtering emails. It filters unsolicited messages (spam) and any potentially dangerous email, such as those with virus attachments.

How can I use mailcleaner?
To use mail cleaner, login to http://mailc.up.edu.ph using your UP webmail username and password.
To free your webmail from spam, click the quarantine tab below the mailcleaner banner and go to the Action module. Click purge spam.
To simply filter your inbox, click the quarantine tab below the mailcleaner banner and go to the Filter module, indicate the number of days (and indicate information for advanced search if necessary) and click refresh.

What is the storage capacity of my UP Webmail account?
If you’re a student, you have a storage capacity of 25 MB. If you’re a member of the faculty or a staff, you can consume up to 50 MB of storage. For offices, they have 100MB storage capacity.

I forgot my UP Webmail username.
Your username involves the first letter of your first name followed by the first letter of your middle name then your surname. Ex. If your name is Juan P. dela Cruz, your username would be jpdelacruz. If another person already used this username before you, a number is added after the generated username like jpdelacruz1, jpdelacruz2, jpdelacruz3.

If you failed to retrieve your username, go to UP Computer Center to to help you get your username back.

Can our office request for a UP Webmail account? What are the procedures?
Of course! Write a formal letter addressed to the UP Computer Center Director stating the email address you want to use and the UP Webmail Account of the the person who will be handling the said office account.

Can I request for additional storage for my inbox?
Individual requests for additional storage is not allowed. But offices may request for additional storage by writing a letter addressed to the UP Computer Center Director.

What is the maximum size of the file in my attachment?
There is no maximum size of attached file but the whole email (which includes your attached file and message) must not be larger than 4 MB. (Chesca)
Why do I need to maintain my inbox quota?
Having a full inbox quota will prevent you from receiving your e-mail.

I haven't been receiving any email. What could be wrong?
Answer #1. You mailbox size might have reached your quota limit. You will not be able to receive incoming messages if your mailbox is full. Delete (and purge deleted/empty trash) messages from your folders to reclaim disk space.

Answer #2. Your mail(s) might have been tagged as spam. Please log on to mailcleaner to check your spam quarantine.

I already deleted messages in my INBOX. I still could not receive email. What should I do?
Please check your folders for messages you can delete.
Try looking at your sent-mail folder by selecting the "sent-mail" folder from the upper right corner of UP Webmail. Then select the files your want to delete by clicking the checkbox to the left of the messages. Delete these messages by clicking "Delete". Clicking "Purge Deleted" (or Empty Trash) would free up the disk space occupied by the deleted messages.

I have deleted all my messages and there is no other message in my INBOX/folders, but my "Disk Usage" indicator is still at 100% and I cannot receive incoming mails. Am I missing something?
You might have clicked "Hide Deleted" (messages). Simply click "Show Deleted" (upper right corner in mailbox list view) and all deleted messages will be displayed. Click "Purge Deleted" (or Empty Trash) to reclaim disk space. To recalculate disk usage, click on this link (https://mail.up.edu.ph/tools/recalc.php) .

How do I get a UP Webmail account/email address?
We are currently giving accounts to the following:

UP Diliman students (enrolled in the current semester): Go to the UP Computer Center to get your account activation details. Bring your UP Form 5 and UP ID.

Faculty/Staff/REPS: Please go to the UP Computer Center to create your account. Bring your appointment paper from HRDO and UP ID. You may send a representative with your signed written authorization letter and your representative's UP ID plus your appointment paper from HRDO and your UP ID.

I am a UP alumnus, can I get an account?
Unfortunately, we are currently giving accounts only to the following: UP Diliman students (enrolled in the current semester) and Faculty/Staff/REPS.

I forgot (don't know) my UP Webmail password.

If you are a student, you may recover your password at: https://mail.upd.edu.ph/lostpass

If you cannot recover your password online (forgot password recall answer/invalid alternate email address), please go to the UP Computer Center to get a temporary password. Bring your UP ID.

For Faculty/Staff/REPS: Please go to th UP Computer Center to get a temporary password. Bring your UP ID.

I forgot (don't know) my CRS password/pincode.
Please go to the CRS Support Team at Office of the University Registrar (OUR). Please note CRS pincode is for freshmen only and is different from UP Webmail Password.

What is the CRS email address?
CRS email address: crssupport@list.upd.edu.ph

The quota/disk usage display in my account is inaccurate
Click on this link (https://mail.upd.edu.ph/tools/recalc.php) to recalculate your disk usage.

I have just activated my account and it says that I am using N% of my space (or a different value every time I refresh the display)
Your (newly activated account's) quota display will not be accurate until you receive your first email message.
If you don't want to wait for an email message, you may click on this link (https://mail.up.edu.ph/tools/recalc.php) to calculate your disk usage.

I cannot delete messages/I get an error when I delete messages
Click "Options", then click "Deleting and Moving Messages". Uncheck/unselect the option "When deleting messages, move them to your Trash folder instead of marking them as deleted". Then click "Save Options".

You should now be able to delete messages (select messages to be deleted, click "Delete", then click "Purge Deleted").

How do I use the Addressbook from the Compose window?
(A) Click on "Address Book" under the "Options" (not on the top menu) to display a popup window containing your addressbook. Select an address from the left side, then click "To >>" (or Cc [Carbon Copy], Bcc [Blind Carbon Copy]) to select the recepient(s). You may select more than one recepients for sending. Then click "Ok".

(B) From the "Compose" view, you can search personal addressbook (or the WebMail directory, depending on your Addressbook preferences) by typing the alias or partial name in the "To:" or "Cc:" fields. For multiple recipients, separate aliases/names by comma(s). For example: "To: mica, mike, minnie". Then click "Expand Names".

If more than one name is matched, you will be presented with a pulldown menu of matching addresses. When one or more names are not resolved (i.e. wrong spelling), an error message will be displayed and the unresolved names will not be expanded.

How can I send to more than one person using the addressbook?
Open the "Compose" windows by clicking "Compose" from the top menu. Click on "Address Book" under the "Options" (not on the top menu) to display a popup window containing your addressbook. Select an address from the left side, then click "To >>" (or Cc [Carbon Copy], Bcc [Blind Carbon Copy]) to select the recepient(s). You may select more than one recepients for sending. Then click "Ok".
Then type in your subject and the message body, then click "Send Message" to send your mail.

I composed a long message (which took me hours to write). But when I clicked "Send Message", I was logged out and my message was not sent.
When the server does not detect an activity from a user for a period of time (hours), it will automatically log-out the user. Unfortunately, the server will not be able to determine that you are typing a message and will log you out (If it takes you hours to compose a message).

To avoid this incident, compose your message in another application and paste your completed message in the compose window of UP WebMail. If you are using "Microsoft Windows":

Open "Accessories-> Notepad" and type your message (periodically saving to your local hard disk just in case you encounter a power interruption).
From the Notepad menu, click "Edit-> Select All" (or CTRL-A).
Then click "Edit-> Copy" (or CTRL-C).
Switch to the "Compose" window of WebMail and input the recipients (To:) and the Subject.
In the message body part, paste your message by typing "CTRL-V" (or right-click and select "Paste").
Finally, click "Send Message" to send your message.

How do I know if my message was sent successfully?
The compose window will only close if the message was sent successfully (i.e. unless you see an error, it is assumed to be successful).

Check your sent-mail folder, it should contain the message you sent (unless you un-selected "Save a copy in sent-mail" before sending the message).

If you clicked "Reply" on a message and sent your message, the answered message will be colored green.

The current system (01/23/2002) does not have a "sent mail successfully" message on the page. We are currently finding a way to reliably display a message that will inform the users if their message was successfully sent to the mail server (for sending to the recipient(s)).

If you incorrectly typed the email address of the recipient or the message cannot be sent to the recipient's address, you will receive an email message from the mail server software indicating an error.

Help! My mailbox is in chaos, what happened to the ordering of my messages?
Your sorting options might have been changed (probably by accidentally clicking the Date, From, Subject or Size header in mailbox view).

To change the sorting order of your mailboxes:

Click "Options" from the WebMail menu.
Click "Display Options" (under the "Other Options" section).
Select your preferred sorting criteria under "Default sorting criteria:" (We recommend "Arrival Time").
Select your preferred sorting direction under "Default sorting direction:" (We recommend "Descending").
Then click "Save Options".

Or you can click this link ( http://mail.upd.edu.ph/mailbox.php?sortby=1&sortdir=1 ) and your mailbox sorting order will be automatically set to "Arrival Time".

My email address is too long. I want a shorter email address.
You can also be contacted using "username@up.edu.ph" where username is your UP Webmail Username.

If you want your outgoing email address to be set to this email address:

Click "Options"
Click "Personal Information"
Click "Edit your Identities"
Under "Your identities:": Select "Default Identity"
Under "Your From: address:": Select the desired email address
Then click "Change" for your changes to take effect

All email addresses on the list are active and will be able to receive email messages regardless of your "From: address" setting.

How do i setup Microsoft Outlook / Netscape Messenger / Eudora Mail / Pegasus Mail to access my UP Webmail account?
Refer to this guide for configuration details:

IMAP Mail Client Configuration
https://mail.upd.edu.ph/imap.php

What is my UP Webmail IMAP server?
Your IMAP server name is printed in your account activation information.
If you have lost your account activation information, login to https:/mail.upd.edu.ph/ and go to: "IMAP Mail Client Configuration https://mail.upd.edu.ph/imap.php" to get your UP Webmail IMAP server.

I've been having some problem setting up Outlook / Eudora / Pegasus / Messenger. I've been having some problem setting up the SMTP server connection.
Correction to the brochure:

Outgoing (SMTP) Server Name: smtp.upd.edu.ph (for users inside the UP Network).
If you are outside the UP Network, consult your service provider for your SMTP server settings.

How do I import addresses from Microsoft Outlook Express?
Part One (Export from Outlook):

1. File -> Export -> Other Addressbook
2. "Text File (Comma Separated Values)"
3. Click "Export"
4. Save exported file as: C:\address.csv (you may use any filename)
5. Click "Next>"
6. Select the files you wish to export: select: Name, Nickname, Email address (you may wish to select other fileds, but webmail will only accept: Name, Alias, Email, Title, Company, Home Address, Work Address, Home Phone, Work Phone, Cell Phone, Fax, Notes)
7. Click "Finish"

Part Two (Import into Webmail):

1. Open WebMail/Login
2. Go to Addressbook -> Import/Export
3. Select the format to import from: Outlook
Leave CHECKED: "does the first row contain the field names?"
4. Click "Browse..." and find the file you used in Part One #4
5. Click "Import"
6. Match these fields (select from the left and right box and click add pair for each pair):
Name->Name
Nickname->Alias
E-mail Address->Email (Double-check to make sure that you match this)
7. Click "Import"
8. You can view all the entries in your personal addressbook by going to the "Addressbook->Search" and using an empty search/match criteria, choose From: "Personal Addressbook" (pulldown menu). Then click "Search" to display the items.

How do I import addresses from my Yahoo! Mail Account?.
Part One (Export from Yahoo! Mail):

1. Logon to Yahoo! Mail
2. Click "Addresses"
3. Click "Import/Export"
4. Under "Export: Yahoo! CSV", Click "Export Now"
5. Save the file (yahoo.csv) and remember the location

If you wish to include the fullname (and not just the firstname) in the name display field, you may wish to edit the CSV file using Microsoft Excel (edit the "First" name column).

Part Two (Import into Webmail):

1. Open WebMail/Login
2. Go to Addressbook -> Import/Export
3. Select the format to import from: CSV
4. Check: "does the first row contain the field names?"
5. Click "Browse..." and find the file you used in Part One #5
6. Click "Import"
7. Match these fields (select from the left and right box and click add pair for each pair):
First->Name
Nickname->Alias
E-mail Address->Email (Double-check to make sure that you match this)
7. Click "Import"
8. You can view all the entries in your personal addressbook by going to the "Addressbook->Search" and using an empty search/match criteria, choose From: "Personal Addressbook" (pulldown menu). Then click "Search" to display the items.

How can I display ALL the contents of my Personal Addressbook?
Click "Addressbook" from the top menu. By default, all your addressbook entries will be displayed. You can also click on "Browse" to display the contents of your addressbook.

I'm using public computers to access UP Webmail, how can I make sure that my password cannot be stolen?

Make sure the browser does not store passwords on disk (remember passwords). If you are using Internet Explorer:

Tools->Internet Options->Content->Autocomplete:
- Uncheck "Forms"
- Uncheck "User names and passwords on forms"
If the computer had already stored your password, you can remove it by doing this (IE): Tools->Internet Options->Content->Autocomplete->Clear Passwords
You should also say "No" when asked by the browser if you want it to "remember your password" or to turn on the auto-complete feature.
Always access UP Webmail using the secure address (HTTPS): https://mail.upd.edu.ph

I have a question/problem/suggestion regarding UP WebMail.
You can contact the UP Helpdesk by calling VOIP # 2050. You may also send your questions todiv id="main" class="fourcol clearfix last">
		    	<h2>Links</h2>
					University of the Philippines System<br/>
					University of the Philippines Diliman<br>
					University Computer Center<br>
					FOSS <br/>
		    </div>

		    <?php // get_sidebar(); ?>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
