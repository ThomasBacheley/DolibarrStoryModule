# STORY FOR [DOLIBARR ERP CRM](https://www.dolibarr.org)

  

# Introduction

**Story** est un module pour créer comme son nom l'indique des **story**.

Le module se présente comme ceci :


![Screenshot vue_general](img/vue_general.png?raw=true  "Vue Général")

*Note : Vue lorsqu'aucune story n'a encore été créer*




![Screenshot vue_general](img/vue_general_1.png?raw=true  "Vue Général")

*Note : Vue lorsqu'au moins une story a été créer*

Un menu est disponible sur la partie gauche de l'écran :


![Screenshot vue_general](img/menu.png?raw=true  "Vue Général")

# Story

Une Story est un élément comprenant 4 champs :
- Titre (varchar(255))
- Description (text)
- Règles métiers (html)
- Tests d’acceptances (html)


![Screenshot story](img/table_story.png?raw=true  "Story")


Un champ "rowid" et "ref" sont présents mais non éditables.
- rowid → Clé primaire qui permet d'identifier la story
- ref → référence de l'objet Story

## Création
En cliquant sur "Creer une story" une page s'affiche laissant la possibilité de rentrer les informations permettant de réaliser une story :

![Screenshot story](img/creation_story.png?raw=true  "Story")

*Note : un texte en **gras** signifie que le champs est obligatoire*

## Édition / Suppression
En cliquant sur la story a éditer, on peut voir que celle-ci est modifiable et supprimable

![Screenshot story](img/story_edit_delete.png?raw=true  "Story")

## Licenses

  

### Main code

  

GPLv3 or (at your option) any later version. See file COPYING for more information.

  

### Documentation

  

All texts and readmes are licensed under GFDL.