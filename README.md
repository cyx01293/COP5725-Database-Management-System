# COP5725-Database-Management-System
## 1. General
### 1.1 Purpose
This project creates an Australian Weather Information Database System (AWIDS). AWIDS uses daily weather observation datasets of 49
Australian cities from January 1, 2009 to June 25, 2017. This document explains technical and functional requirements of AWIDS and provides information about the roles and responsibilities needed to support such a system. This document also explains the relationship between various functions.
### 1.2 Background and Scope
Weather is determined by factors like the temperature, rainfall, evaporation and sunshine at any location, and can influence the daily life of human being. The weather is a general term for the atmospheric state (such as cold and warm, wind and rain, dry and wet, sunny and sunny) and it changes in a short period of time. Relatively, climate is the average or statistical state of meteorological elements and weather phenomena over a long period of time. The time scale can be month, season, year, and years to hundreds of years. Our project will focus on studying changes of weather and accordingly have a brief glance at the regular pattern of climate. Climate can change the space-time distribution of agriculture, some agriculture needed to be planted on area which has high humidity. If the rainfall is not enough, these kinds of crops cannot survive. Thus, farmers need to know when they could plant these kinds of crops to get biggest profits. Meanwhile, companies need the weather information to adjust their sales plan, to decide which kind of items to be sold in specific time, to get greatest benefits. Furthermore, climate can influence the height of sea level, and some places and animals, are deeply relevant to the sea level.
## 2. Functional Requirements
### 2.1 Summary of Functions
AWIDS provides a pragmatic solution for weather data collection and query. The system functions include:
* Column Data Features Explanation
* Users Accounts
* Data Accessibility
* Tuple BackOffice Administration
* System Security
* Data Analysis and Prediction

A detailed dataset about different weather features are needed to build up AWIDS. The dataset we download online is about daily weather observation of numerous Australian cities. It includes daily weather observation datasets of 49 Australian cities and from January 1, 2009 to June 25, 2017. The dataset contains 24 columns and 142,193 tuples. Each tuple contains one weather record in a specific location within a specific day. Each column describes a feature of tuples of the weather phenomena. While we have basic data, the most important thing for us to do is to search for different data we need in database quickly and combine all the data we searched to calculate and get the results
of the problems we are interested.

### 2.2 Functions Description
In order to accomplish the functions mentioned above, the details of each function are expanded as the followings:
#### 2.2.1 Column Data Features Explanation
A general introduction of dataset is presented before users log in AWIDS. The introduction contains the description of dataset, and its volume (24 columns×142193 tuples).

Feature explanation of each column is displayed when the mouse cursor passes over dataset columns.

Some tuples are not complete, i.e. some feature values are lost, thus it is necessary to compute the rate of lost data. The rate of lost data of each column is displayed after feature explanation when the mouse cursor passes over dataset columns.

#### 2.2.2 User Accounts
People can register accounts with user names and passwords through first website page.

Only users whose account are in the database can log in this system. Password hints and password reset functions are handled by the website.

#### 2.2.3 Data Accessibility
Basic queries such as search for a specific tuple is available via a search input box. Users are required to fill in a form on the website to set specific dates, locations, to select the corresponding data tuples.

Users can also set specific value regions for several columns in the form to select tuples that meet the requirements described by the form, e. g. if the user sets that the date 01/01/2019, the location is Albury, then s/he could acquire the corresponding tuple.

#### 2.2.4 Tuple BackOffice Administration
Tuple BackOffice Administration is used to manage tuple operations, such as add, delete, etc. It is not open to public. It is only available for the internal users of AWIDS. The internal users need accounts which are different from user accounts to log in this
system.

The internal users may submit online operation requests to update the database with their local data. They can add, delete, or modify the tuples on the website.

#### 2.2.5 System Security
Normal users can only have read access to the database through website.
API can provide read-only data access for normal users.
Tuple editing, such as add, delete, etc. can only be implemented by internal users.
Automatic logging out will be implemented if no execution occurs from the user interface for 20 minutes.

#### 2.2.6 Data Analysis and Prediction
AWIDS provides data analysis functions. Users can select types of the statistic results showed as a chart or a graph.

Users can search a specified feature of weather information curves with respect to time on x-coordinate of a specified location. Users determine the time duration of the curve,which can be a week, a month, a year, etc. For example, if a user would like to know the average temperature of the city Albury in May, 2009., s/he can fill in the analysis request form on the website with the information above. Then s/he will see the result curve.

Users can select specific sections of tuples, e. g. users can select tuples whose daily MinTemp (minimum temperature) is lower than 15 in 2009. This selection returns the number of selected tuples as well. Meanwhile, AWIDS can also record the numbers of tuples under specific requirements and draw a curve with these numbers, e. g. AWIDS can store the numbers of tuples whose daily MinTemp is lower than 15 in 2009, 2010, 2011, 2012, 2013,2014, respectively. Then this system can draw a curve with this 6 data points.

Comparison of different climate features, such as temperature, humidity, etc. between different locations or different dates is available. The result can be displayed in a bar chart or a form.

AWIDS also provides prediction functions. The system can predict some weather features in the next month/year with data sets of past few months/years. To simplify the prediction model, only regression models are utilized to fit the existing data sets and predict the future values, e.g. users can select the average minTemps in 2009, 2010, 2011, 2012, 2013, 2014 to fit the regression model and predict the average minTemps in 2015. The system also provides the relative accuracy of prediction results. The system can also provide rainfall forecast. The probability of rainfall for the next day can be calculated with the tuples of past several days.

## 3. Equipment and Software
### 3.1 Equipment
AWIDS will be responsible to be built up with currently existing equipment. No additional equipment is required at this time.

### 3.2 Software
AWIDS will be built with PHP, an open-source web scripting language. Data will be stored in an Oracle database, also open source. AWIDS will be developed with Oracle SQL developer. The content of user interface will be developed in HTML. The style of the interface will be developed in CSS. The internal functions will be realized in JavaScript. The web pages will be designed with the software, Dreamweaver. The application will be able to run on any web pages. The connection of Oracle database and web pages will be accomplished with PHP. This connection can convey the processed data from the local equipment to the web pages for display.
