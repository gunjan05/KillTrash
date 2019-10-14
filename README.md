KillTrash
GUNJAN JHANWAR - 9405583710
BHUMIL JAKHELIYA - 8850998751	
AZIZ PRESSWALA - 7303609716
COLLEGE  - Dwarkadas J Sanghvi College of Engineering

Idea/ Purpose of the project
Waste sorting is a tedious process that has to be done manually. The goal is to divide waste into different categories in order to reduce waste and improve recycling and composting to have a cleaner and livable environment for present and future generations. However, a lot of people have been struggling to distinguish between different categories of sorting such as wet or dry waste that their city has provided for them in public. This confusion has caused people to put their trash into whatever category they like which can result in endangering the environment.To solve this dilemma, we have developed an android app that uses object detection implemented using tensorflow to categorize the trash into categories such as glass, metal, plastic, etc  and also provides the top three class probability (confidence) of which the garbage can belong to. Further another module detects what type of plastic waste it is and gives basic information of category of plastic such as a health concern, type of plastic along with information such as what it should be recycled into, consequences of using it more than once and how to use it less.
Our application would help garbage men to segregate waste. The statistics regarding waste segregation such as types of wastes in a particular region, percentage of plastic recycled, amount of biodegradable and non-biodegradable waste  generated in a particular amount of time would be calculated and stored in the database.This data is visualized on our web application.
We have implemented a web application for the Government which connects all the people associated with waste management. It consists of educational material for raising awareness among the public regarding waste management. People having complaints regarding waste not getting managed or collected in their neighbourhood can post their complaints with photos and location on which the government can take appropriate action. The government authorities can visualize the statistics mentioned above collected by a mobile application through an interactive dashboard 

How to open our project:
1)Android app:Killtrash_1
2)Android app:Killtrash_2
3)Web app:Killtrash_web
(Both android app not integrated)
Technology implemented
We have built an android application that classifies the image of the trash into one of the predefined categories. We have implemented object detection & used TensorFlow along with Keras to train the model. Then this model was deployed to classify the image clicked by the user into one of the categories and provide relevant information accordingly. Another model was trained for classifying different types of plastic. Eg. plastic bottle, straw, coffeelid, etc.
Web application was developed using HTML,CSS,Javascript,Bootstrap for frontend and PHP and MySQL for backend.

Future Scope and Scalability
	Due to time constraints we were not able to integrate the above two mobile application(Killtrash_1,Killtrash_2) features.In future we would like to integrate it into a single application.We would like to optimize the garbage classification algorithm to accurately classify multiple objects simultaneously and categorizing it into classes such as glass, plastic, metal, etc as well as predicting waste disposal methods such as incineration,compost,etc. based on the type of waste.
Video of Our Implementation
	We have also added recording of our implementation in folder.


 


