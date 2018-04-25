# Hexane-Gmod-Loading-Screen
Basic Garry's Mod Loading Screen used as a default on Hexane Networks servers. 
Current features consist of displaying the hostname of the server automatically upon joining.

![GitHub release](https://img.shields.io/github/release/HexaneNetworks/Hexane-Gmod-Loading-Screen.svg?style=for-the-badge)

# Web Browser Demo

https://loadingscreen.usehexane.com/gmod/

Using the web browser demo only displays a static placeholder text as the server hostname. Use the "In-Game Connecting Demo" to test the automatic hostname text print.

# In-Game Connecting Demo

Server IP: `164.132.211.164:27015`

# Image Preview

![Loading into a server with the loading screen](https://github.com/HexaneNetworks/Hexane-Gmod-Loading-Screen/blob/master/Image%20Preview/connecting-to-the-server-preview.png?raw=true)

# Using this loading screen

1. Navigate to your server.cfg
2. Add or replace this line into the file

`sv_loadingurl "https://loadingscreen.usehexane.com/gmod/"`

# Self-hosted Instructions

1. Upload the index.html to your web server
2. Test accessing it in your browser
3. Add it to your server.cfg

example: `sv_loadingurl "https://loadingscreen.usehexane.com/gmod/"`
