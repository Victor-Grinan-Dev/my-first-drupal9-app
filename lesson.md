create in themes/custom a new folder <app-name>
create a info.yml file:

name: <app-name>
type: theme
description: "A react app inside my drupal"
base theme: bartik/olivero or whatever you want
core_version_requirement: ^8 || ^9

create a js/src folders (one inside the other)
npm install --save react react-dom prop-types
npm install --save-dev @babel/core @babel/preset-env @babel/preset-react babel-loader webpack webpack-cli
