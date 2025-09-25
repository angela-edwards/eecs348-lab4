CC = gcc
CFLAGS = -Wall -g

OBJS = main.o isOdd.o 
TARGET = isOddProgram

$(TARGET): $(OBJS)
	$(CC) $(CFLAGS) -o $(TARGET) $(OBJS)

main.o: main.c isOdd.h
	$(CC) $(CFLAGS) -c main.c 

isOdd.o: isOdd.c isOdd.h
	$(CC) $(CFLAGS) -c isOdd.c 

clean:
	rm -f $(OBJS) $(TARGET)