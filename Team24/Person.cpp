#include "Person.h"

Person::Person()
{
	name = "NULL";
	id = 0;
	age = 0;
}

Person::Person(string name, long id, int age)
{
	this->name = name;
	this->id = id;
	this->age = age;
}

Person::Person(const Person &other)
{
	name = other.name;
	id = other.id;
	age = other.age;
}

void Person::SetPerson()
{
	cout << "Set Your Name please: " << endl;
	cin >> name;
	cout << "Set Your ID please: " << endl;
	cin >> id;
	cout << "Set Your Age please: " << endl;
	cin >> age;
}
