/*Ben Michaeli 205569767 Campus Beer Sheva C++ Assignment 4 SCE*/
#pragma once
#include <iostream>
using namespace std;
#include <String>
#include <typeinfo>
#include <time.h>   

class Person
{

protected:
	string FirstName;
	string LastName;
	string  Id;
public:
	Person();
	virtual void Set();
	string GetFirstName();
	string GetLastName();
	string GetId();
	Person operator=(const Person&);
	Person(const Person&);
	virtual void Print();
	bool BestPerson();
	~Person() {};
};