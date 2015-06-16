# Customizing InstantWP

### Install
1. Create a folder called `InstantWP` in your Downloads folder (`C:/Users/a0n###/Downloads/`)
2. Download InstantWP [here](http://www.instantwp.com/) and save it to `C:/Users/a0n###/Downloads/InstantWP`
3. Create a folder called `bcbsmn-wp_template` where you keep your other local repositories (Example: `C:/Users/a0n###/path/to/local/repos/`)
4. Double click `InstantWP_4.4.2.exe` that you downloaded in step #2
5. Click <button>Browse</button> to install InstantWP to the folder you created in step #3 (`C:/Users/a0n###/path/to/local/repos/bcbsmn-wp_template`)
6. Click <button>Install</button>
7. Instant WordPress will be installed into the folder you selected in step #5
8. Click <button>Close</button> once the installation is complete
- **Note**:
	- Instant WordPress does not add anything to your systems registry or otherwise. It is entirely portable and runs from with the folder where it is installed.

---

### Modifying Your Installation
1. Browse to `C:/Users/a0n###/path/to/local/repos/bcbsmn-wp_template/iwpserver/htdocs`
2. Rename `index.php` to `index.php.bak` and `instantwp.css` to `instantwp.css.bak`
3. Create a new `index.php` and `instantwp.css`
4. Copy everything from <a href="https://raw.githubusercontent.com/a0n494/theme-docs/master/InstantWP/index.php" target="_blank">here</a> and paste it into the `index.php` file that created in step #3. Save your changes.
5. Copy everything from <a href="https://raw.githubusercontent.com/a0n494/theme-docs/master/InstantWP/instantwp.css" target="_blank">here</a> and paste it into the `instantwp.css` file that created in step #3. Save your changes.
6. In `C:/Users/a0n###/path/to/local/repos/bcbsmn-wp_template/iwpserver/htdocs` rename the folder `wordpress` to `wordpress.bak`

---

### Connecting to the Repository
1. In `C:/Users/a0n###/path/to/local/repos/bcbsmn-wp_template/iwpserver/htdocs` create a folder named `wordpress`
2. Open SourceTree
3. Click the `Clone / New` button in the top toolbar
4. In the `Source Path / URL` input enter `git@github.com:bluecrossmn/carecoordination.git`
5. In the `Destination Path` input browse to `C:/Users/a0n###/path/to/local/repos/bcbsmn-wp_template/iwpserver/htdocs/wordpress`
6. Click the <button>Clone</button> button

---

### Notes
- To start the server, double click on `C:/Users/a0n###/path/to/local/repos/bcbsmn-wp_template/iwpserver/iwpserver.exe`
- To stop the server, simply close the window that opened when you started the server
- <a href="http://127.0.0.1:4001/" target="_blank">http://127.0.0.1:4001/</a> - InstantWP Control Panel
- `C:/Users/a0n###/path/to/local/repos/bcbsmn-wp_template/iwpserver/htdocs` is your root directory. You can create other directories within this one and they should appear under "Other Projects" on your InstantWP Control Panel
	 - Example: `C:/Users/a0n###/path/to/local/repos/bcbsmn-wp_template/iwpserver/htdocs/test/index.php` would be accessible at `http://127.0.0.1:4001/test/`