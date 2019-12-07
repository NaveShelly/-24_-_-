#include <iostream>
#include <string>
#ifndef PERSON_H
#define PERSON_H
using namespace std;

class Person {

private:
	string name;
	long id;
	int age;

public:
	Person();
	Person(string, long, int);
	Person(const Person&);
	~Person();
	virtual void SetPerson();
	inline string getName() { return name; }
	inline long getID() { return id; }
	inline int getAge() { return age; }



};
#endif