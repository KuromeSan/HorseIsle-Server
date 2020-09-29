﻿using System.IO;
using System.Reflection;

namespace Horse_Isle_Server
{
    class Program
    {
        static void Main(string[] args)
        {
            Directory.SetCurrentDirectory(Path.GetDirectoryName(Assembly.GetEntryAssembly().Location));
            ConfigReader.OpenConfig();
            CrossDomainPolicy.GetPolicy();
            Database.OpenDatabase();
            Map.OpenMap();
            Gamedata.ReadGamedata();
            Server.StartServer();

        }
    }
}
